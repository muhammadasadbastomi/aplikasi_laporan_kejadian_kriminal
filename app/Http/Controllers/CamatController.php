<?php

namespace App\Http\Controllers;

use App\Models\Camat;
use File;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CamatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Camat::all();
        return view('admin.camat.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.camat.create');
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

        Camat::create($input);

        return redirect()->route('admin.camat.index')->withSuccess('Data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Camat  $camat
     * @return \Illuminate\Http\Response
     */
    public function show(Camat $camat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Camat  $camat
     * @return \Illuminate\Http\Response
     */
    public function edit(Camat $camat)
    {

        return view('admin.camat.edit', compact('camat'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Camat  $camat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Camat $camat)
    {
        $input = $request->all();

        if (isset($request->foto)) {
            $file = $request->file('foto');

            $file_name = time() . "_" . $file->getClientOriginalName();

            $file->move('foto', $file_name);
            $input['foto'] = $file_name;
        }

        $camat->update($input);

        return redirect()->route('admin.camat.index')->withSuccess('Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Camat  $camat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Camat $camat)
    {

        try {
            File::delete('foto/' . $camat->foto);
            $camat->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withError('Data gagal dihapus');
            }
        }

    }
}
