<?php

namespace promona\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresa';

    protected $fillable = array('razao_social','nome_fantasia','cnpj','ativo','nome_responsavel');

    protected $guarded = ['id'];


}
