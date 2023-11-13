<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    protected $table = 'asistencias';

    protected $fillable = [
        'id',
        'pasante_id',
        'observacion',
        'ingreso',
        'salida',
        'created_at',
        'updated_at',
    ];

    public function pasante(){
        return $this->belongsTo(Pasante::class,'pasante_id');
    }

    public $timestamp = true;
}
