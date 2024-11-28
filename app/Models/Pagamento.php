<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;

    protected $table = 'pagamentos';

    protected $fillable = [
        'locacao_id',
        'valor',
        'metodo_pagamento',
        'data_pagamento',
    ];

    public function locacao()
    {
        return $this->belongsTo(Locacao::class);
    }
}
