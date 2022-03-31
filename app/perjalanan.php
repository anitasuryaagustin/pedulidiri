<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perjalanan extends Model
{
    protected $table='perjalanans';
    protected $fillable=[
        'id',
        'tgl_perjalanan',
        'jam',
        'lokasi',
        'suhu_tubuh',
    ];
    protected $primarykey='id';
}
