<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalonKaryawan;
use Illuminate\Support\Facades\DB;
use PDF;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $calon_karyawan = CalonKaryawan::all();

        $count_pelamarAll = CalonKaryawan::count();
        $count_jumlahKaryawanHariIni = CalonKaryawan::where(DB::raw("date(created_at)"), date('Y-m-d'))->count();
        $count_karyawanDiterima = CalonKaryawan::where('status','di terima')->count();
        $count_karyawanDitolak = CalonKaryawan::where('status','di tolak')->count();

        return view('page.dashboard', compact('calon_karyawan','count_pelamarAll','count_jumlahKaryawanHariIni','count_karyawanDiterima','count_karyawanDitolak'));
    }

    public function viewFile($id)
    {
        $file = CalonKaryawan::find($id);
        $path = public_path()."/storage/file_lamaran/".$file->file;
        
        $headers = array(
            'Content-Type: aplication/pdf'
        );

        $namaFile = explode(' ', $file->nama_lengkap);
        return response()->download($path, 'File_lamaran_'.$namaFile[0].'.pdf', $headers);
    }

    public function data_all()
    {
        $data = CalonKaryawan::all();
        return view('page.data-pelamar', compact('data'));
    }

    public function data_diterima()
    {
        $data = CalonKaryawan::where('status','di terima')->get();
        return view('page.data-pelamarDiterima', compact('data'));
    }

    public function data_ditolak()
    {
        $data = CalonKaryawan::where('status','di tolak')->get();
        return view('page.data-pelamarDiterima', compact('data'));
    }
}
