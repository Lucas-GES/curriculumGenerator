<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    use HasFactory;

    protected $table = 'experiencias';

    protected $fillable = [
        'nome',
        'cargo',
        'inicioContrato',
        'fimContrato',
        'descricao'
    ];

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }
}
