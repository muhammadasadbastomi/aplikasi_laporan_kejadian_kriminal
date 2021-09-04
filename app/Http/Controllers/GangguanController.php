<?php

namespace App\Http\Controllers;

use App\Models\Camat;
use App\Models\Desa;
use App\Models\Gangguan;
use App\Models\Kasi;
use App\Models\LampiranGangguan;
use App\Models\Petugas;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class GangguanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Gangguan::all();

        return view('admin.gangguan.index', compact('data'));
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

        return view('admin.gangguan.create', compact('camat', 'kasi', 'petugas', 'desa'));
    }

    public function createDetail($id)
    {
        $gangguan = Gangguan::FindOrFail($id);

        return view('admin.detail-gangguan.create', compact('gangguan'));
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

        Gangguan::create($input);

        return redirect()->route('admin.gangguan.index')->withSuccess('Data berhasil disimpan');

    }

    public function storeDetail(Request $request)
    {
        $input = $request->all();

        if (isset($request->lampiran)) {
            $file = $request->file('lampiran');

            $file_name = time() . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $input['lampiran'] = $file_name;
        }

        LampiranGangguan::create($input);

        return redirect()->route('admin.gangguan.show', $request->gangguan_id)->withSuccess('Data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gangguan  $gangguan
     * @return \Illuminate\Http\Response
     */
    public function show(Gangguan $gangguan)
    {
        return view('admin.gangguan.show', compact('gangguan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gangguan  $gangguan
     * @return \Illuminate\Http\Response
     */
    public function edit(Gangguan $gangguan)
    {

        $camat = Camat::all();
        $kasi = Kasi::all();
        $petugas = Petugas::all();
        $desa = Desa::all();

        return view('admin.gangguan.edit', compact('gangguan', 'camat', 'kasi', 'petugas', 'desa'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gangguan  $gangguan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gangguan $gangguan)
    {
        $input = $request->all();

        $gangguan->update($input);

        return redirect()->route('admin.gangguan.index')->withSuccess('Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gangguan  $gangguan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gangguan $gangguan)
    {

        try {
            $gangguan->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withError('Data gagal dihapus');
            }
        }

    }
}
