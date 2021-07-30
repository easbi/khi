<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Dailyactivity extends Model
{
    use HasFactory;

    protected $table = "daily_activity";
    protected $fillable=[
        'nip',
        'wfo_wfh',
        'kegiatan',
        'bukti',
        'satuan',
        'kuantitas',
        'is_internet',
        'kualitas',
        'is_done',
        'tgl',
        'created_by'
    ];
}