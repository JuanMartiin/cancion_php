<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; //import de java
use Illuminate\Database\Eloquent\Model; //import de java

class Persona extends Model //
{
    use HasFactory; //trait
    
    
    protected $table = 'persona';
    
    //no voy a usar marcas de tiempo (por ahora)
    public $timestamps = false;
    
    public $fillable = ['dni', 'name', 'apellidos', 'telefono'];
}