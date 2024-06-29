<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    public function docente(){
        return $this->belongsTo(Docentes::class);
    }
    public function estudiante(){
        return $this->belongsTo(Estudiantes::class);
    }
    public function area(){
        return $this->belongsTo(Area::class);
    }
}
