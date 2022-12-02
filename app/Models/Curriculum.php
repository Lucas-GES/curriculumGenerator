<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function experiencia()
    {
        return $this->hasMany(Experiencia::class);
    }

    public function formacao()
    {
        return $this->hasMany(Formacao::class);
    }

    public function formacaoComplementar()
    {
        return $this->hasMany(FormacaoComplementar::class);
    }

    public function habilidades()
    {
        return $this->hasMany(Habilidades::class);
    }
}
