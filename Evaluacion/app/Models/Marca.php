<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marca';
    use HasFactory;
    protected $primaryKey = 'idMarca';
    protected $fillable = ['NombreMarca'];
    public $timestamps = false;
}
