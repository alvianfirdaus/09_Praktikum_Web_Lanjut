<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = "matakuliah"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswa
    public $timestamps = false;
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nama_matkul',
        'sks',
        'jam',
        'semester'
    ];

    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class,'mahasiswa_mataKuliah', 'mahasiswa_nim','matakuliah_id');
    }
    public function mahasiswamatakuliah(){
        return $this->belongsToMany(MahasiswaMatakuliah::class);
    }
}