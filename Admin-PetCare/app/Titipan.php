<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titipan extends Model
{
    protected $table = 'tb_hewan';
    protected $fillable = ['nama_pemilik','alamat_pemilik','no_hp','nama_hewan','jenis_kelamin','tanggal_penitipan','tanggal_kemnbali','perawatan_1','perawatan_2','perawatan_3','perawatan_4'];
}
