<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    protected $table = 'servicio';
    use HasFactory;
    protected $primaryKey = 'idServicio';
    protected $fillable = ['FechaInicio','FechaFinalizacion', 'Observaciones', 'Observaciones','EstadoServicio', 'Problema', 'Tecnico_idTecnico', 'Diagnostico_idDiagnostico','TipoServicio_idTipoServicio'];
    public $timestamps = false;
}
