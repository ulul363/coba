<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suratmasuk extends Model
{
    protected $primarykey = 'id';

    use HasFactory;

    protected $table = 'suratmasuk';

    protected $fillable = [
        'nomor',
        'tanggal',
        'no_surat',
        'tgl_msk',
        'perihal'
    ];

}
