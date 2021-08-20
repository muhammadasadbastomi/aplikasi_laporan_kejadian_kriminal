<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Petugas;
use File;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Petugas::all();
        return view('admin.petugas.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawai = Pegawai::all();
        return view('admin.petugas.create', compact('pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        if (isset($request->foto)) {
            $file = $request->file('foto');

            $file_name = time() . "_" . $file->getClientOriginalName();

            $file->move('foto', $file_name);
            $input['foto'] = $file_name;
        }

        Petugas::create($input);

        return redirect()->route('admin.petugas.index')->withSuccess('Data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petugas  $petuga
     * @return \Illuminate\Http\Response
     */
    public function show(Petugas $petuga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petugas  $petuga
     * @return \Illuminate\Http\Response
     */
    public function edit(Petugas $petuga)
    {
        $pegawai = Pegawai::all();

        return view('admin.petugas.edit', compact('petuga', 'pegawai'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petugas  $petuga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petugas $petuga)
    {
        $input = $request->all();

        if (isset($request->foto)) {
            $file = $request->file('foto');

            $file_name = time() . "_" . $file->getClientOriginalName();

            $file->move('foto', $file_name);
            $input['foto'] = $file_name;
        }

        $petuga->update($input);

        return redirect()->route('admin.petugas.index')->withSuccess('Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petugas  $petuga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petugas $petuga)
    {

        try {
            File::delete('foto/' . $petuga->foto);
            $petuga->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withError('Data gagal dihapus');
            }
        }

    }
}
