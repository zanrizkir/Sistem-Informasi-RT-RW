<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama');
            $table->integer('umur');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jk',['Laki-laki','Perempuan']);
            $table->string('alamat');
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha']);
            $table->enum('statuh_nikah',['Nikah','Belum Nikah']);
            $table->enum('Pendidikan', ['SD', 'SMP', 'SMA/K', 'S1', 'S2','S3']);
            $table->string('pekerjaan');        
            $table->enum('gol_darah', ['A', 'B', 'AB', 'O']);
            $table->unsignedBigInteger('id_rt');
            $table->foreign('id_rt')->references('id')->on('rts');
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
        Schema::dropIfExists('penduduks');
    }
}
