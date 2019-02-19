@extends('layout.principal')

@section('empresa')


<title>Listar Empresa</title>
<div class="container">
    <div class="table1">
        <h1>Lista de Produtos</h1>
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th >#</th>
                                <th>Razão Social</th>
                                <th>Nome Fantasia</th>
                                <th>CNPJ</th>
                                <th>Ativo</th>
                                <th>Nome Responsável</th>
                                <th>Ferramentas</th>
                            </tr>
                        </thead>
                        
                            @foreach($emp as $e)

                            
                            <tbody>
                                <tr>
                                    <th scope="row">{{$e->id}}</th>
                                    <td>{{$e->razao_social}}</td>
                                    <td>{{$e->nome_fantasia}}</td>
                                    <td>{{ $e->cnpj}}</td>                           
                                    <td>{{$e->ativo }}</td>
                                    <td>{{$e->nome_responsavel }}</td>
                                    <td>                      
                                        <a href="/empresa/remover/{{$e->id}}">
                                            <i class="far fa-trash-alt"></i>
                                        </a>&nbsp
                                        <a href="/empresa/editar/{{$e->id}}">
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