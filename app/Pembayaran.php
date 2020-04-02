<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    public $timestamps = false;

    protected $table ="pembayaran";

    public $fillable =['id_pembayaran','id','nis','tgl_bayar','bulan_dibayar','tahun_bayar','id_spp','jumlah_bayar'];

    public $primaryKey = "id_pembayaran";

    protected $casts = ['id_pembayaran' => 'int'];
}
