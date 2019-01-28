@extends('layout.principal')

@section('empresa')

<link rel="stylesheet"  href="/css/style.css"/>

<div class="container">
    <form action="" method="post" class="style">
        <div class="form-group">
            <label for="r">Razão Social</label>
            <input type="text" class="form-control" nome="razao_social" id="r"  placeholder="">
        </div>
        <div class="form-group">
            <label for="n">Nome Fantasia</label>
            <input type="text" class="form-control" nome="nome_fantasia" id="n" placeholder="">
        </div>
        <div class="form-group">
            <label for="c">CNPJ</label>
            <input type="number" class="form-control" nome="cnpj" id="c" placeholder="" min="11" max="11">
        </div>
        <div class="form-group">
            <label for="res">Nome Responsável</label>
            <input type="text" class="form-control" id="res" placeholder="" max="200">
        </div>
        <div class="form-group">
            <label>Status da Empresa</label>
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