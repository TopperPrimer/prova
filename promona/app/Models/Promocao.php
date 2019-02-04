<?php

namespace promona\Models;

use Illuminate\Database\Eloquent\Model;

class Promocao extends Model
{
    protected $table = 'promocao';

    protected $fillable = array('descricao','valor_desconto','percentual','ativo');

    protected $guarded = ['id'];
}
