@extends('layout.principal')

@section('membro')
<title>Adicionar Membro</title>
<link rel="stylesheet"  href="/css/style.css"/>

<div class="container">
    <form action="/membro/add" method="post" class="style">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">    
        <div class="form-group">
            <label for="r">Nome</label>
            <input type="text" class="form-control" name="primeiro_nome" id="r"  placeholder="">
        </div>
        <div class="form-group">
            <label for="n">Sobrenome</label>
            <input type="text" class="form-control" name="sobrenome" id="n" placeholder="">
        </div>
        <div class="form-group">
            <label for="c">CPF</label>
            <input type="number" class="form-control" name="cpf" id="c" placeholder="" >
        </div>
        <!--
        <div class="form-group">
            <label for="res">Data do Cadastro</label>
            <input type="date" class="form-control" name="data_cadastro" id="res" placeholder="" max="200">
        </div>-->
        <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" name="ativo" id="exampleFormControlSelect1">
                    <option value="1">ATIVO</option>
                    <option value="0">INATIVO</option>
                </select>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@stop