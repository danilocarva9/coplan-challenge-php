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
                            {{ Form::open(['url' => 'foo/bar']) }}

                            {{ Form::input('text', 'nome', '', ['class' => 'form-control', 'autofocus']) }}

                            {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection