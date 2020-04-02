<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public $timestamps = false;
    protected $table ="kelas";

    public $fillable =['id_kelas','nama_kelas','kompotensi_keahlian'];

    public $primaryKey = "id_kelas";

    protected $casts = ['id_kelas' => 'int'];
}
