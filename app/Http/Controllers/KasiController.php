<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Kasi;
use File;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class KasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kasi::all();
        return view('admin.kasi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatan::all();

        return view('admin.kasi.create', compact('jabatan'));
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

        Kasi::create($input);

        return redirect()->route('admin.kasi.index')->withSuccess('Data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kasi  $kasi
     * @return \Illuminate\Http\Response
     */
    public function show(Kasi $kasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kasi  $kasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Kasi $kasi)
    {
        $jabatan = Jabatan::all();

        return view('admin.kasi.edit', compact('kasi', 'jabatan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kasi  $kasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kasi $kasi)
    {
        $input = $request->all();

        if (isset($request->foto)) {
            $file = $request->file('foto');

            $file_name = time() . "_" . $file->getClientOriginalName();

            $file->move('foto', $file_name);
            $input['foto'] = $file_name;
        }

        $kasi->update($input);

        return redirect()->route('admin.kasi.index')->withSuccess('Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kasi  $kasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kasi $kasi)
    {

        try {
            File::delete('foto' . $kasi->foto);
            $kasi->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withError('Data gagal dihapus');
            }
        }

    }
}
