<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalonKaryawan;
use PDF;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $calon_karyawan = CalonKaryawan::all();
        return view('page.dashboard', compact('calon_karyawan'));
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
}
