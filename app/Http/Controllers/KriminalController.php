<?php

namespace App\Http\Controllers;

use App\Models\Camat;
use App\Models\Desa;
use App\Models\Kasi;
use App\Models\Kriminal;
use App\Models\Petugas;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class KriminalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kriminal::all();

        return view('admin.kriminal.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $camat = Camat::all();
        $kasi = Kasi::all();
        $petugas = Petugas::all();
        $desa = Desa::all();

        return view('admin.kriminal.create', compact('camat', 'kasi', 'petugas', 'desa'));
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

        Kriminal::create($input);

        return redirect()->route('admin.kriminal.index')->withSuccess('Data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kriminal  $kriminal
     * @return \Illuminate\Http\Response
     */
    public function show(Kriminal $kriminal)
    {
        return view('admin.kriminal.show', compact('kriminal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kriminal  $kriminal
     * @return \Illuminate\Http\Response
     */
    public function edit(Kriminal $kriminal)
    {

        $camat = Camat::all();
        $kasi = Kasi::all();
        $petugas = Petugas::all();
        $desa = Desa::all();

        return view('admin.kriminal.edit', compact('kriminal', 'camat', 'kasi', 'petugas', 'desa'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kriminal  $kriminal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kriminal $kriminal)
    {
        $input = $request->all();

        $kriminal->update($input);

        return redirect()->route('admin.kriminal.index')->withSuccess('Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kriminal  $kriminal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kriminal $kriminal)
    {

        try {
            $kriminal->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withError('Data gagal dihapus');
            }
        }

    }
}
