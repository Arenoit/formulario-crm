<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    protected $table = 'provincias';
    public $timestamps = false;
    protected $fillable = [
        'cod',
        'nombre',
    ];
}
