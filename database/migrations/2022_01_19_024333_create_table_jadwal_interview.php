<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableJadwalInterview extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_interview', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('calon_id');
            $table->date('tanggal');
            $table->string('jam');
            $table->string('catatan');
            $table->timestamps();

            $table->foreign('calon_id')->references('id')->on('calon_karyawan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_interview');
    }
}
