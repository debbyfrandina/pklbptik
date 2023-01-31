<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'file_pemberdayaan',
        'user_id'
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
