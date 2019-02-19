@extends('layout.principal')

@section('empresa')
<title>Listar Membro</title>
<div class="container">
    <div class="table1">
        <h1>Lista de Produtos</h1>
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Primeiro nome</th>
                                <th>Sobrenome</th>
                                <th>ATIVO</th>
                                <th>CPF</th>
                                <th>Data do Cadastro</th>
                                <th>Ferramentas</th>
                            </tr>
                        </thead>
                            @foreach($mem as $m)
                            <tbody>
                                <tr>
                                    <th scope="row">{{$m->id }}</th>
                                    <td>{{ $m->primeiro_nome }}</td>
                                    <td>{{ $m->sobrenome }}</td>
                                    <td>{{ $m->ativo }}</td>
                                    <td>{{ $m->cpf }}</td>
                                    <td>{{ $m->created_at }}</td>
                                    <td>                      
                                        <a href="/membro/remover/{{$m->id}}">
                                            <i class="far fa-trash-alt"></i>
                                        </a>&nbsp
                                        <a href="/membro/editar/{{$m->id}}">
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