<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{

    protected $table = 'departamentos';

    protected $fillable = ['nombre','piso'];

    public function supervisores(){
        return $this->hasMany(Supervisor::class,'departamento_id');
    }

    public function pasantes(){
        return $this->hasMany(Pasante::class,'departamento_id');
    }
}
