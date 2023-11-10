<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    use HasFactory;

    protected $table = 'instituciones';

    protected $fillable = [
        'id',
        'nombre',
        'direccion',
        'created_at',
        'updated_at',
    ];

    public $timestamps = true;
}
