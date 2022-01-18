<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 100);
            $table->string('jenis_kelamin', 100);
            $table->string('nik', 16);
            $table->string('no_telp', 13);
            $table->string('tempat_tgl_lahir', 50);
            $table->string('alamat', 100);
            $table->string('pendidikan', 20);
            $table->string('posisi', 50);
            $table->string('status', 20);
            $table->string('file', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calon_karyawan');
    }
}
