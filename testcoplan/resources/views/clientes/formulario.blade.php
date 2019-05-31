@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Informe abaixo as informações do cliente
                        <a class="float-right" href="{{url('clientes')}}">Listagem cliente</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            @if(Session::has('mensagem_erro'))
                                <div class="alert alert-danger">{{ Session::get('mensagem_erro') }}</div>
                            @endif
                            @if(Request::is('*/editar'))
                                {{ Form::model($cliente, ['method' => 'PATCH', 'url' => 'clientes/'.$cliente->id]) }}
                            @else
                                {{ Form::open(['url' => 'clientes/salvar']) }}
                            @endif

                            <font color="red">*</font>
                            {{ Form::label('nome', 'Nome') }}
                            {{ Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome']) }}

                            <font color="red">*</font>
                            {{ Form::label('sobrenome', 'Sobrenome') }}
                            {{ Form::input('text', 'sobrenome', null, ['class' => 'form-control', 'placeholder' => 'Sobrenome']) }}

                            {{ Form::label('endereco', 'Endereço') }}
                            {{ Form::input('text', 'endereco', null, ['class' => 'form-control', 'placeholder' => 'Endereço']) }}

                            {{ Form::label('cargo', 'Cargo') }}
                            {{ Form::input('text', 'cargo', null, ['class' => 'form-control', 'placeholder' => 'Cargo']) }}

                            {{ Form::submit('Salvar', ['class'=>'btn btn-primary']) }}
                            <font color="red">* Campos obrigatórios!</font>

                            {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection