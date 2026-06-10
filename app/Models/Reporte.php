<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $table = 'reportes';

    public $timestamps = false;

    protected $fillable = [
        'fecha_perdida',
        'zona_barrio',
        'estado',
        'recompensa',
        'mascota_id'
    ];

    public function mascota()
    {
        return $this->belongsTo(Mascota::class);
    }
}