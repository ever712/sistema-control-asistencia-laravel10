<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasante extends Model
{
    use HasFactory;

    protected $table = 'pasantes';

    protected $fillable = [
        'id',
        'nombre',
        'email',
        'password',
        'departamento_id',
        'supervisor_id',
        'institucion_id',
        'created_at',
        'updated_at',
    ];

    public function departamento(){
        return $this->belongsTo(Departamento::class,'departamento_id');
    }

    public function supervisor(){
        return $this->belongsTo(Supervisor::class,'supervisor_id');
    }

    public function institucion(){
        return $this->belongsTo(Institucion::class,'institucion_id');
    }

    public function asistencias(){
        return $this->hasMany(Asistencia::class,'pasante_id');
    }

    public $timestamps = true;
}
