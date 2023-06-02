<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suratkeluar extends Model
{
    protected $primarykey = 'id';

    use HasFactory;

    protected $table = 'suratkeluar';

    protected $fillable = [
        'nomor',
        'pengirim',
        'perihal',
        'tanggal'
    ];
}
