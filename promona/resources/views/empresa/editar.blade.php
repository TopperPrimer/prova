@extends('layout.principal')

@section('empresa')
<title>Editar Empresa</title>

<link rel="stylesheet"  href="/css/style.css"/>

<div class="container">
    <form action="/empresa/edit" method="post" class="style">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-group">
            <label>ID</label>
            <input type="number" class="form-control" value="{{ $e->id}}" name="id" placeholder="">
        </div>
        <div class="form-group">
            <label>Razão Social</label>
            <input type="text" class="form-control" value="{{ $e->razao_social}}" name="razao_social" placeholder="">
        </div>
        <div class="form-group">
            <label for="n">Nome Fantasia</label>
            <input type="text" class="form-control" value="{{ $e->nome_fantasia }}" name="nome_fantasia" id="n" placeholder="">
        </div>
        <div class="form-group">
            <label for="c">CNPJ</label>
            <input type="number" class="form-control" value="{{ $e->cnpj }}" name="cnpj" id="c" placeholder="" >
        </div>
        <div class="form-group">
            <label for="res">Nome Responsável</label>
            <input type="text" class="form-control" value="{{ $e->nome_responsavel }}" name="nome_responsavel" id="res" placeholder="" max="200">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" name="ativo" id="exampleFormControlSelect1">
                    <option value="{{ $e->ativo }}">ATIVO</option>
                    <option value="0">INATIVO</option>
                </select>
        </div>    
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@stop