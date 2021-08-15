<?php

namespace App\Http\Controllers;

use App\Models\Camat;
use App\Models\Gangguan;
use App\Models\Kasi;
use App\Models\Kegiatan;
use App\Models\Konflik;
use App\Models\Kriminal;
use App\Models\Petugas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->now = Carbon::now()->translatedFormat('d F Y');
    }
    public function kegiatanIndex()
    {
        return view('admin.report.kegiatanIndex');
    }
    public function kegiatanAll()
    {
        $data = Kegiatan::all();
        $now = $this->now;
        $pdf = PDF::loadView('admin.report.kegiatanAll', ['data' => $data, 'now' => $now]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Semua Kegiatan.pdf');
    }

    public function kegiatanYear(Request $request)
    {
        $data = Kegiatan::whereYear('tanggal_kegiatan', '=', $request->year)->get();
        $now = $this->now;
        $year = $request->year;
        $pdf = PDF::loadView('admin.report.kegiatanYear', ['data' => $data, 'now' => $now, 'year' => $year]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Kegiatan Tahunan.pdf');
    }

    public function kegiatanMonth(Request $request)
    {
        $data = Kegiatan::whereYear('tanggal_kegiatan', '=', $request->year)->whereMonth('tanggal_kegiatan', '=', $request->month)->get();
        $now = $this->now;
        $year = $request->year;
        switch ($request->month) {
            case '01':
                $month = 'Januari';
                break;
            case '02':
                $month = 'Februari';
                break;
            case '03':
                $month = 'Maret';
                break;
            case '04':
                $month = 'April';
                break;
            case '05':
                $month = 'Mei';
                break;
            case '06':
                $month = 'Juni';
                break;
            case '07':
                $month = 'Juli';
                break;
            case '08':
                $month = 'Agustus';
                break;
            case '09':
                $month = 'September';
                break;
            case '10':
                $month = 'Oktober';
                break;
            case '11':
                $month = 'November';
                break;
            case '12':
                $month = 'Desember';
                break;

            default:
                # code...
                break;
        }
        $month = strToUpper($month);
        $pdf = PDF::loadView('admin.report.kegiatanMonth', ['data' => $data, 'now' => $now, 'year' => $year, 'month' => $month]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Kegiatan Bulanan.pdf');
    }

    public function konflikIndex()
    {
        return view('admin.report.konflikIndex');
    }
    public function konflikAll()
    {
        $data = Konflik::all();
        $now = $this->now;
        $pdf = PDF::loadView('admin.report.konflikAll', ['data' => $data, 'now' => $now]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Semua Konflik.pdf');
    }

    public function konflikYear(Request $request)
    {
        $data = Konflik::whereYear('tanggal_konflik', '=', $request->year)->get();
        $now = $this->now;
        $year = $request->year;
        $pdf = PDF::loadView('admin.report.konflikYear', ['data' => $data, 'now' => $now, 'year' => $year]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Konflik Tahun.pdf');
    }

    public function konflikMonth(Request $request)
    {
        $data = Konflik::whereYear('tanggal_konflik', '=', $request->year)->whereMonth('tanggal_konflik', '=', $request->month)->get();
        $now = $this->now;
        $year = $request->year;
        switch ($request->month) {
            case '01':
                $month = 'Januari';
                break;
            case '02':
                $month = 'Februari';
                break;
            case '03':
                $month = 'Maret';
                break;
            case '04':
                $month = 'April';
                break;
            case '05':
                $month = 'Mei';
                break;
            case '06':
                $month = 'Juni';
                break;
            case '07':
                $month = 'Juli';
                break;
            case '08':
                $month = 'Agustus';
                break;
            case '09':
                $month = 'September';
                break;
            case '10':
                $month = 'Oktober';
                break;
            case '11':
                $month = 'November';
                break;
            case '12':
                $month = 'Desember';
                break;

            default:
                # code...
                break;
        }
        $month = strToUpper($month);
        $pdf = PDF::loadView('admin.report.konflikMonth', ['data' => $data, 'now' => $now, 'year' => $year, 'month' => $month]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Konflik Bulanan.pdf');
    }

    public function gangguanIndex()
    {
        return view('admin.report.gangguanIndex');
    }
    public function gangguanAll()
    {
        $data = Gangguan::all();
        $now = $this->now;
        $pdf = PDF::loadView('admin.report.gangguanAll', ['data' => $data, 'now' => $now]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Semua Gangguan.pdf');
    }

    public function gangguanYear(Request $request)
    {
        $data = Gangguan::whereYear('tanggal_gangguan', '=', $request->year)->get();
        $now = $this->now;
        $year = $request->year;
        $pdf = PDF::loadView('admin.report.gangguanYear', ['data' => $data, 'now' => $now, 'year' => $year]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Gangguan Tahun.pdf');
    }

    public function gangguanMonth(Request $request)
    {
        $data = Gangguan::whereYear('tanggal_gangguan', '=', $request->year)->whereMonth('tanggal_gangguan', '=', $request->month)->get();
        $now = $this->now;
        $year = $request->year;
        switch ($request->month) {
            case '01':
                $month = 'Januari';
                break;
            case '02':
                $month = 'Februari';
                break;
            case '03':
                $month = 'Maret';
                break;
            case '04':
                $month = 'April';
                break;
            case '05':
                $month = 'Mei';
                break;
            case '06':
                $month = 'Juni';
                break;
            case '07':
                $month = 'Juli';
                break;
            case '08':
                $month = 'Agustus';
                break;
            case '09':
                $month = 'September';
                break;
            case '10':
                $month = 'Oktober';
                break;
            case '11':
                $month = 'November';
                break;
            case '12':
                $month = 'Desember';
                break;

            default:
                # code...
                break;
        }
        $month = strToUpper($month);
        $pdf = PDF::loadView('admin.report.gangguanMonth', ['data' => $data, 'now' => $now, 'year' => $year, 'month' => $month]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Gangguan Bulanan.pdf');
    }
    public function kriminalIndex()
    {
        return view('admin.report.kriminalIndex');
    }
    public function kriminalAll()
    {
        $data = Kriminal::all();
        $now = $this->now;
        $pdf = PDF::loadView('admin.report.kriminalAll', ['data' => $data, 'now' => $now]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Semua Kriminal.pdf');
    }

    public function kriminalYear(Request $request)
    {
        $data = Kriminal::whereYear('tanggal_kejadian', '=', $request->year)->get();
        $now = $this->now;
        $year = $request->year;
        $pdf = PDF::loadView('admin.report.kriminalYear', ['data' => $data, 'now' => $now, 'year' => $year]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Kriminal Tahun.pdf');
    }

    public function kriminalMonth(Request $request)
    {
        $data = Kriminal::whereYear('tanggal_kejadian', '=', $request->year)->whereMonth('tanggal_kejadian', '=', $request->month)->get();
        $now = $this->now;
        $year = $request->year;
        switch ($request->month) {
            case '01':
                $month = 'Januari';
                break;
            case '02':
                $month = 'Februari';
                break;
            case '03':
                $month = 'Maret';
                break;
            case '04':
                $month = 'April';
                break;
            case '05':
                $month = 'Mei';
                break;
            case '06':
                $month = 'Juni';
                break;
            case '07':
                $month = 'Juli';
                break;
            case '08':
                $month = 'Agustus';
                break;
            case '09':
                $month = 'September';
                break;
            case '10':
                $month = 'Oktober';
                break;
            case '11':
                $month = 'November';
                break;
            case '12':
                $month = 'Desember';
                break;

            default:
                # code...
                break;
        }
        $month = strToUpper($month);
        $pdf = PDF::loadView('admin.report.kriminalMonth', ['data' => $data, 'now' => $now, 'year' => $year, 'month' => $month]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Kriminal Bulanan.pdf');
    }

    public function grafik()
    {
        $now = $this->now;

        $konflik = Konflik::all()->count();
        $gangguan = Gangguan::all()->count();
        $kriminal = Kriminal::all()->count();
        return view('admin.report.grafik', compact('now', 'konflik', 'gangguan', 'kriminal'));
        // $pdf = PDF::loadView('admin.report.grafik', compact('now', 'konflik', 'gangguan', 'kriminal'));
        // $pdf->setPaper('a4', 'landscape');

        // return $pdf->stream('Laporan Grafik Kejadian.pdf');

    }

    public function petugas()
    {
        $now = $this->now;
        $data = Petugas::all();
        // return view('admin.report.grafik', compact('now', 'konflik', 'gangguan', 'kriminal'));
        $pdf = PDF::loadView('admin.report.petugas', compact('now', 'data'));
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Data Petugas.pdf');

    }

    public function camat()
    {
        $now = $this->now;
        $data = Camat::all();
        // return view('admin.report.grafik', compact('now', 'konflik', 'gangguan', 'kriminal'));
        $pdf = PDF::loadView('admin.report.camat', compact('now', 'data'));
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Data Camat.pdf');

    }

    public function kasi()
    {
        $now = $this->now;
        $data = Kasi::all();
        // return view('admin.report.grafik', compact('now', 'konflik', 'gangguan', 'kriminal'));
        $pdf = PDF::loadView('admin.report.kasi', compact('now', 'data'));
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Data Kasi.pdf');

    }
}
