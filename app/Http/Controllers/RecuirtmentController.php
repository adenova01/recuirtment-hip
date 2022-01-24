<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\CalonKaryawan;
use App\Models\JadwalInterview;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailNotification;

class RecuirtmentController extends Controller
{
    public function saveRecuirtment(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf',
            'nama_lengkap' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'nik' => 'required',
            'no_telp' => 'required',
            'tempat_tgl_lahir' => 'required',
            'alamat' => 'required',
            'pendidikan' => 'required',
            'posisi' => 'required'
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
    public function sendJadwal(Request $request, $id)
    {
        $calon = CalonKaryawan::find($id);

        $data = [
            'calon_id' => $calon->id,
            'tanggal' => $request->post('tgl'),
            'jam' => $request->post('jam'),
            'catatan' => $request->post('catatan')
        ];

        JadwalInterview::insert($data);

        $time = strtotime($request->post('tgl'));
        $data_email = [
            'isi' => 'Selamat '.$this->getUcapan(date('H:i')).' '.$calon->nama_lengkap.' Lamaran yang anda kirim telah kami terima dan berikut adalah jadwal untuk melakukan interview.',
            'tanggal' => ': '.date('D, d M Y', $time),
            'jam' => ': '.$request->post('jam'),
            'catatan' => ': '.$request->post('catatan')
        ];

        Mail::to($calon->email)->send(new EmailNotification($data_email));
        
        return back()->with('message','Jadwal Interview Berhasil di tambahkan');
    }

    private function getUcapan($jam)
    {
        if ($jam > '05:30' && $jam < '10:00') {
            return 'Pagi';
        } elseif ($jam >= '10:00' && $jam < '15:00') {
            return 'Siang';
        } elseif ($jam < '18:00') {
            return 'Sore';
        } else {
            return 'Malam';
        }
    }
}
