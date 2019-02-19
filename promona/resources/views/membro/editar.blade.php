@extends('layout.principal')

@section('empresa')
<title>Editar Membro</title>

<link rel="stylesheet"  href="/css/style.css"/>

<div class="container">
    <form action="/membro/edit" method="post" class="style">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-group">
            <label>ID</label>
            <input type="number" class="form-control" value="{{ $m->id}}" name="id" placeholder="">
        </div>
        <div class="form-group">
            <label>Primeiro nome</label>
            <input type="text" class="form-control" value="{{ $m->primeiro_nome}}" name="primeiro_nome" placeholder="">
        </div>
        <div class="form-group">
            <label for="n">Sobrenome</label>
            <input type="text" class="form-control" value="{{ $m->sobrenome }}" name="sobrenome" id="n" placeholder="">
        </div>
        <div class="form-group">
            <label for="c">CPF</label>
            <input type="number" class="form-control" value="{{ $m->cpf }}" name="cpf" id="c" placeholder="" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" name="ativo" id="exampleFormControlSelect1">
                    <option value="{{ $m->ativo }}">ATIVO</option>
                    <option value="0">INATIVO</option>
                </select>
        </div>    
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@stop