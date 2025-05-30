<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormUser extends Model
{
    protected $table = 'formuser';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'cedula',
        'telefono',
        'sexo',
        'fecha_nacimiento',
        'direccion',
        'provincia_id',
    ];
    public function provincia()
    {
        return $this->belongsTo(\App\Models\Provinces::class, 'provincia_id', 'id');
    }
}
