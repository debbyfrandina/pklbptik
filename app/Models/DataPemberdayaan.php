<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPemberdayaan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_program',
        'tujuan',
        'outcome',
        'tanggal_pelaksanaan',
        'tempat_pelaksanaan',
        'jumlah_peserta',
        'jumlah_sekolah',
        'user_id'
    ];
}
