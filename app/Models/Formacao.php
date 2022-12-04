<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formacao extends Model
{
    use HasFactory;

    protected $table = 'formacaos';

    protected $fillable = [
        'nome',
        'descricao'
    ];

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }
}
