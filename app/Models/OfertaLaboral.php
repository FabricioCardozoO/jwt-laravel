<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfertaLaboral extends Model
{
    use HasFactory;

    protected $table='ofertas_laborales';

    protected $primaryKey = 'idofertalaboral';

    protected $fillable = [
        'nombre_oferta',
        'user_id',
        'estado'
    ];
}
