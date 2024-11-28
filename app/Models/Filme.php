<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'descricao', 'categoria_id', 'ano_lancamento'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
