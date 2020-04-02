<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    public $timestamps = false;
    protected $table ="spp";

    public $fillable =['id_spp','tahun','nominal'];

    public $primaryKey = "id_spp";

    protected $casts = ['id_spp' => 'int'];
}
