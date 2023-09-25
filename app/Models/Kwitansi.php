<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kwitansi extends Model
{
    protected $fillable = [
        'nomor_kwitansi',
        'nama_lengkap',
        'alamat',
        'no_hp',
        'terbilang',
        'pembayaran',
        'keterangan',
        'lokasi',
        'no_kavling',
        'type',
        'jumlah',
    ];
}