<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = [
        'nome_empresa', 
        'pessoa_contacto', 
        'alvara', 
        'nuit', 
        'pais', 
        'provincia', 
        'cidade', 
        'bairro', 
        'endereco_fisico', 
        'end_numero', 
        'ramo_atividade', 
        'telefone_fixo', 
        'fax', 
        'celular', 
        'email', 
        'nome_banco', 
        'numero_conta', 
        'nib', 
        'nome_agencia', 
        'bancaria'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
}
