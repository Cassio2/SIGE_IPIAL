<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato_seleciona_curso extends Model
{
    use HasFactory;

    protected $table = 'candidato_seleciona_curso';

    protected $fillable = [
        'candidato_id',
        'curso_id',
        'preferencia',
        'created_at',
        'updated_at',
    ];
}
