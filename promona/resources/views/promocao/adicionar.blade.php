@extends('layout.principal')

@section('promocao')

<link rel="stylesheet"  href="/css/style.css"/>
<title>Adicionar Promoção</title>
<div class="container">
    <div class="table1">
        <form action="/promocao/add" method="post">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                <div class="form-group">
                    <label for="n">Descrição</label>
                    <input type="text" class="form-control" name="descricao" id="n" placeholder="">
                </div>
                <div class="form-group">
                    <label for="c">Valor do Desconto</label>
                    <input type="number" class="form-control" name="valor_desconto" id="c" placeholder="" >
                </div>
                <div class="form-group">
                    <label for="res">Percentual</label>
                    <input type="text" class="form-control" name="percentual" placeholder="" >
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
</div>
@stop