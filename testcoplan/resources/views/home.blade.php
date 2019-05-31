@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Seja bem vindo!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget neque velit. Nam et lobortis turpis, quis scelerisque justo. Mauris venenatis bibendum est a iaculis. Quisque volutpat lectus libero, vitae feugiat neque imperdiet id. Suspendisse quis porta lectus, id interdum neque. Etiam semper urna id enim euismod imperdiet. Donec posuere, leo sit amet commodo interdum, purus felis aliquet risus, ut mattis odio metus non est. Sed eu nibh a massa euismod iaculis at a justo. Ut lorem diam, semper eget mauris id, viverra rhoncus lorem.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
