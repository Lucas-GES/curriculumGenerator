<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormacaoComplementar extends Model
{
    use HasFactory;

    protected $table = 'formacao_complementars';

    protected $fillable = [
        'nome',
        'descricao',
        'horas'
    ];

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }
}
