@extends('layout.principal')

@section('membro')

<link rel="stylesheet"  href="/css/style.css"/>

<div class="container">
    <form action="" method="post" class="style">
        <div class="form-group">
            <label for="r">Nome</label>
            <input type="text" class="form-control" nome="p_nome" id="r"  placeholder="">
        </div>
        <div class="form-group">
            <label for="n">Sobrenome</label>
            <input type="text" class="form-control" nome="s_nome" id="n" placeholder="">
        </div>
        <div class="form-group">
            <label for="c">CPF</label>
            <input type="number" class="form-control" nome="cpf" id="c" placeholder="" min="11" max="11">
        </div>
        <div class="form-group">
            <label for="res">Data do Cadastro</label>
            <input type="date" class="form-control" id="res" placeholder="" max="200">
        </div>
        <div class="form-group">
            <label>Status do Membro</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Ativo
                        </label>
                </div>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@stop