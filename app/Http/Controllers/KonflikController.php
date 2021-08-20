<?php

namespace App\Http\Controllers;

use App\Models\Camat;
use App\Models\Desa;
use App\Models\Kasi;
use App\Models\Konflik;
use App\Models\Petugas;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class KonflikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Konflik::all();

        return view('admin.konflik.index', compact('data'));
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

        return view('admin.konflik.create', compact('camat', 'kasi', 'petugas', 'desa'));
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

        Konflik::create($input);

        return redirect()->route('admin.konflik.index')->withSuccess('Data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Konflik  $konflik
     * @return \Illuminate\Http\Response
     */
    public function show(Konflik $konflik)
    {
        return view('admin.konflik.show', compact('konflik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Konflik  $konflik
     * @return \Illuminate\Http\Response
     */
    public function edit(Konflik $konflik)
    {

        $camat = Camat::all();
        $kasi = Kasi::all();
        $petugas = Petugas::all();
        $desa = Desa::all();

        return view('admin.konflik.edit', compact('konflik', 'camat', 'kasi', 'petugas', 'desa'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Konflik  $konflik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Konflik $konflik)
    {
        $input = $request->all();

        $konflik->update($input);

        return redirect()->route('admin.konflik.index')->withSuccess('Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Konflik  $konflik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konflik $konflik)
    {

        try {
            $konflik->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withError('Data gagal dihapus');
            }
        }

    }
}
