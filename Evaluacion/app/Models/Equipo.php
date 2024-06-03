<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $table = 'equipo';

    protected $primaryKey = 'idEquipo';

    protected $fillable = [
        'Modelo',
        'EstadoEquipo',
        'Marca_idMarca',
        'Cliente_idCliente',
    ];
    public $timestamps = false;
}
