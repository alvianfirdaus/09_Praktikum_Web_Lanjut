<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_matakuliah', function(Blueprint $table){
            $table->id();
            $table->string('mahasiswa_nim')->nullable();//menambahkan kolom mahasiswa_nim
            $table->unsignedBigInteger('matakuliah_id')->nullable();//menambahkan kolom matakuliah_id
            $table->char('nilai');
            $table->foreign('mahasiswa_nim')->references('Nim')->on('mahasiswas'); //menambahkan foreign key di kolom mahasiswa_nim
            $table->foreign('matakuliah_id')->references('id')->on('matakuliah'); //menambahkan foreign key di kolom matakuliah_id
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
        Schema::dropIfExists('mahasiswa_matakuliah');
    }
};