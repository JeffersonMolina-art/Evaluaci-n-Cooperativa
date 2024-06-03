<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model

{
    protected $table = 'diagnostico';
    use HasFactory;
    protected $primaryKey = 'idDiagnostico';
    protected $fillable = ['Descripcion','FechaDiagnostico', 'Tecnico_idTecnico', 'Equipo_idEquipo'];
    public $timestamps = false;
}
