<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $table = 'tecnico';
    protected $primaryKey = 'idTecnico';

    protected $fillable = ['Persona_idPersona'];
    public $timestamps = false;
}
