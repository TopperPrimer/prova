@extends('layout.principal')

@section('empresa')
<title>Adicionar Empresa</title>
<link rel="stylesheet"  href="/css/style.css"/>


<div class="container">
    <form action="/empresa/add" method="post" class="style">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-group">
            <label>Razão Social</label>
            <input type="text" class="form-control" name="razao_social" placeholder="">
        </div>
        <div class="form-group">
            <label for="n">Nome Fantasia</label>
            <input type="text" class="form-control" name="nome_fantasia" id="n" placeholder="">
        </div>
        <div class="form-group">
            <label for="c">CNPJ</label>
            <input type="number" class="form-control" name="cnpj" id="c" placeholder="" >
        </div>
        <div class="form-group">
            <label for="res">Nome Responsável</label>
            <input type="text" class="form-control" name="nome_responsavel" id="res" placeholder="" max="200">
        </div>
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