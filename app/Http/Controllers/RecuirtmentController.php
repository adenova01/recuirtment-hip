<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\CalonKaryawan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailNotification;

class RecuirtmentController extends Controller
{
    public function saveRecuirtment(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf'
        ]);

        $fileName = "";
        $data = [
            'nama_lengkap' => $request->post('nama_lengkap'),
            'email' => $request->post('email'),
            'jenis_kelamin' => $request->post('gender'),
            'nik' => $request->post('nik'),
            'no_telp' => $request->post('no_telp'),
            'tempat_tgl_lahir' => $request->post('tempat_lahir').', '.$request->post('tanggal_lahir'),
            'alamat' => $request->post('alamat'),
            'pendidikan' => $request->post('pendidikan'),
            'posisi' => $request->post('posisi'),
            'file' => $this->_upload_lamaran($request->file('file')),
            'status' => 'pending',
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ];

        CalonKaryawan::insert($data);

        return redirect('/')->with('success','Data Anda Berhasil di Simpan Mohon tunggu informasi selanjutnya');
    }

    public function _upload_lamaran($file)
    {
        if($file){
            $fileName = Storage::disk('local')->put('public/file_lamaran',$file);
            $nama_file = explode('/',$fileName);
            return $nama_file[2];
        }
    }

    // send jadwal interview
    public function sendJadwal($id)
    {
        $calon = CalonKaryawan::find($id);

        dd($calon->email);
    }
}
