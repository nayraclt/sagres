<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'tb_aluno';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =
    [
        'id',
        'nome',
        'matricula',
        'endereco',
        'bairro',
        'cep',
        'uf',
        'email',
        'data_entrada',
    ];

}
