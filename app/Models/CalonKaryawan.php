<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonKaryawan extends Model
{
    use HasFactory;
    protected $table = 'calon_karyawan';
    protected $fillable = [
        'nama_lengkap',
        'email',
        'jenis_kelamin',
        'nik',
        'no_telp',
        'tempat_tgl_lahir',
        'alamat',
        'pendidikan',
        'posisi',
        'file'
    ];
}
