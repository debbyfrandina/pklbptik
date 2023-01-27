<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPengembangan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_program',
        'nama_kegiatan',
        'nama_sub_kegiatan',
        'nama_sub_sub_kegiatan',
        'tanggal_mulai',
        'tanggal_selesai',
        'tempat_pelaksanaan',
        'jumlah_peserta',
        'jumlah_produk',
        'user_id'
    ];
}
