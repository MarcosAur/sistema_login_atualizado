<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitacoes extends Model
{
    use HasFactory;
    
    public function Usuario()
    {
        return $this->hasOne(Usuario::class, "id", "criador_id");
    }
    public function messages()
    {
        return $this->hasMany(Mensagem::class, "solicitacao_id", "id");
    }
}
