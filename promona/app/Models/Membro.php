<?php

namespace promona\Models;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $table = 'membro';

    protected $fillable = array('primeiro_nome','sobrenome','ativo','cpf','data_cadastro');

    protected $guarded = ['id'];
}
