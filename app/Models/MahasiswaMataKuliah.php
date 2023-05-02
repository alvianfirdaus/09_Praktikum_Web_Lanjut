<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaMataKuliah extends Model
{
    protected $table = "mahasiswa_matakuliah"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswa
    public $timestamps = false;
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'mahasiswa_nim',
        'matakuliah_id',
        'nilai'
    ];

    public function matakuliah(){
        return $this->belongsTo(MataKuliah::class);
    }
}