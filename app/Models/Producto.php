<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'beneficio',
        'descripcion',
        'imagen',
        'precio',
        'costo',
        'oferta',
        'stock',
        'estado'
    ];
}
