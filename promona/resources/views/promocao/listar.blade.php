@extends('layout.principal')

@section('empresa')
<title>Listar Promoção</title>
<div class="container">
    <div class="table1">
        <h1>Lista de Produtos</h1>
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Descrição</th>
                                <th>Valor Desconto</th>
                                <th>Percentual</th>
                                <th>Ativo</th>
                                <th>Data de criação</th>
                                <th>Ferramentas</th>
                            </tr>
                        </thead>
                            @foreach($pro as $p)
                            <tbody>
                                <tr>
                                    <th scope="row">{{$p->id }}</th>
                                    <td>{{ $p->descricao }}</td>
                                    <td>R$ {{ $p->valor_desconto }}</td>
                                    <td>{{ $p->percentual }}%</td>
                                    <td>{{ $p->ativo }}</td>
                                    <td>{{ $p->created_at }}</td>
                                    <td>                      
                                        <a href="/promocao/remover/{{$p->id}}">
                                            <i class="far fa-trash-alt"></i>
                                        </a>&nbsp
                                        <a href="/promocao/editar/{{$p->id}}">
                                            <i class="far fa-edit"></i>
                                        </a>
                                    
                                    </td>
                                </tr>
                            </tbody> 
                            @endforeach
                    </table>           
    </div>
</div>

@stop