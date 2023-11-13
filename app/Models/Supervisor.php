<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{

    protected $table = 'supervisores';

    protected $fillable = ['nombre', 'cargo', 'departamento_id'];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class,'departamento_id');
    }

    public function pasantes(){
        return $this->hasMany(Pasante::class,'supervisor_id');
    }
}
