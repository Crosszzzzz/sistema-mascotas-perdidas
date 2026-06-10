<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $table = 'mascotas';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'tipo',
        'raza',
        'color',
        'caracteristicas_especiales',
        'usuario_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function reportes()
    {
        return $this->hasMany(Reporte::class);
    }
}