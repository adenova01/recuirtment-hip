<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalInterview extends Model
{
    use HasFactory;
    protected $table = "jadwal_interview";
    protected $fillable = [
        'calon_id',
        'tanggal',
        'jam',
        'catatan'
    ];
}
