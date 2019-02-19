@extends('layout.principal')

@section('empresa')
<title>Editar Membro</title>

<link rel="stylesheet"  href="/css/style.css"/>

<div class="container">
    <form action="/promocao/edit" method="post" class="style">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-group">
            <label>ID</label>
            <input type="number" class="form-control" value="{{ $p->id}}" name="id" placeholder="">
        </div>
        <div class="form-group">$p
            <label>Descricao</label>
            <input type="text" class="form-control" value="{{ $p->descricao}}" name="descricao" placeholder="">
        </div>
        <div class="form-group">
            <label for="n">Valor do desconto</label>
            <input type="text" class="form-control" value="{{ $p->valor_desconto }}" name="valor_desconto" id="n" placeholder="">
        </div>
        <div class="form-group">
            <label for="c">Percentual</label>
            <input type="text" class="form-control" value="{{ $p->percentual }}" name="percentual" id="c" placeholder="" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" name="ativo" id="exampleFormControlSelect1">
                    <option value="{{ $p->ativo }}">ATIVO</option>
                    <option value="0">INATIVO</option>
                </select>
        </div>    
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@stop