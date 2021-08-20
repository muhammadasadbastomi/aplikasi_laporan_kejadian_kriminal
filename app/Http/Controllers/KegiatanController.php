<?php

namespace App\Http\Controllers;

use App\Models\Camat;
use App\Models\Kasi;
use App\Models\Kegiatan;
use App\Models\Petugas;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kegiatan::all();

        return view('admin.kegiatan.index', compact('data'));
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

        return view('admin.kegiatan.create', compact('camat', 'kasi', 'petugas'));
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

        Kegiatan::create($input);

        return redirect()->route('admin.kegiatan.index')->withSuccess('Data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        return view('admin.kegiatan.show', compact('kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatan $kegiatan)
    {

        $camat = Camat::all();
        $kasi = Kasi::all();
        $petugas = Petugas::all();

        return view('admin.kegiatan.edit', compact('kegiatan', 'camat', 'kasi', 'petugas'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $input = $request->all();

        $kegiatan->update($input);

        return redirect()->route('admin.kegiatan.index')->withSuccess('Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {

        try {
            $kegiatan->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withError('Data gagal dihapus');
            }
        }

    }
}
