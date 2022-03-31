<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kota extends Model
{
     protected $table='kotas';
    protected $fillable=[
        'nama',
        'nik',
        'id',
        'kota',
        'kecamatan',
        'provinsi',
        'kelurahan'
    ];
    protected $primarykey='id';
}

