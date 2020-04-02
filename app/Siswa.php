<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public $timestamps = false;

    protected $table ="siswa";

    public $fillable =['nis','nisn','nama','id_kelas','alamat','no_telp','id_spp'];

    public $primaryKey = "nis";

    protected $casts = ['nis' => 'string'];
}
