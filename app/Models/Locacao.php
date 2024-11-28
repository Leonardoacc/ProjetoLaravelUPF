<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locacao extends Model
{
    use HasFactory;

    protected $table = 'locacoes';

    protected $fillable = [
        'cliente_id',
        'filme_id',
        'data_locacao',
        'data_devolucao',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function filme()
    {
        return $this->belongsTo(Filme::class);
    }
}
