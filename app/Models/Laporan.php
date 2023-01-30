<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laporan extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'tujuan',
        'outcome',
        'jumlah',
        'file_admin',
        'user_id'
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
