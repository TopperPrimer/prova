@extends('layout.principal')

@section('promocao')

<link rel="stylesheet"  href="/css/style.css"/>

<div class="container">
    <form action="" method="post" class="style">
        <div class="form-group">
            <label>Empresas</label>
                <select class="form-control">
                    <option>1</option>
                </select>
        </div>
        <div class="form-group">
            <label for="n">Descrição</label>
            <input type="text" class="form-control" nome="s_nome" id="n" placeholder="">
        </div>
        <div class="form-group">
            <label for="c">Valor do Desconto</label>
            <input type="number" class="form-control" nome="cpf" id="c" placeholder="" min="11" max="11">
        </div>
        <div class="form-group">
            <label for="res">Percentual</label>
            <input type="number" class="form-control" id="res" placeholder="" min="1" max="3">
        </div>
        <div class="form-group">
            <label for="res">Data do Cadastro</label>
            <input type="date" class="form-control" id="res" placeholder="" min="1" max="3">
        </div>
        <div class="form-group">
            <label>Status do Promoção</label>
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