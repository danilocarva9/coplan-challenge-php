@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Clientes
                        <a class="float-right" href="{{url('clientes/novo')}}">Novo cliente</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            @if(Session::has('mensagem_sucesso'))
                                <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                            @endif
                        <div class="panel-body">
                            <table class="table">
                                <th>Nome</th>
                                <th>Sobrenome</th>
                                <th>Endereço</th>
                                <th>Cargo</th>
                                <th>Ações</th>
                                <tbody>
                                    @foreach($clientes as $cliente)
                                    <tr>
                                        <td>{{ $cliente->nome }}</td>
                                        <td>{{ $cliente->sobrenome }}</td>
                                        <td>{{ $cliente->endereco }}</td>
                                        <td>{{ $cliente->cargo }}</td>
                                        <td>
                                            <a href="clientes/{{$cliente->id}}/editar" class="btn btn-primary btn-sm">Editar</a>
                                            {{ Form::open(['method' => 'DELETE', 'url' => '/clientes/'.$cliente->id, 'style' => 'display: inline;']) }}
                                            <button type="submit" class="btn btn-primary btn-sm">Excluir</button>
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection