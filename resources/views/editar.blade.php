@extends('adminlte::page')

<script type="text/javascript" src="<?php echo asset('js/registro.js')?>"></script>

@section('content_header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Perfil
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url("/home")}}" class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Perfil</li>
        </ol>
    </section>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-5">
                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{asset('storage/Ninja.png')}}" alt="User profile picture">

                        <h3 class="profile-username text-center">{{$user->name." ".$user->sobrenome}}</h3>

                        <p class="text-muted text-center">{{$user->role->name}}</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Logradouro</b> <a class="pull-right">{{$user->logradouro}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Bairro</b> <a class="pull-right">{{$user->bairro}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Numero</b> <a class="pull-right">{{$user->numero}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Cep</b> <a class="pull-right">{{$user->cep}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Cidade</b> <a class="pull-right">{{$user->cidade}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Estado</b> <a class="pull-right">{{$user->uf}}</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-7">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
                        <li><a href="#settings" data-toggle="tab">Settings</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <!-- Post -->
                                <div class="box box-widget widget-user-2">
                                    <!-- Add the bg color to the header using any of the bg-* classes -->
                                    <div class="widget-user-header bg-green">
                                        <div class="widget-user-image">
                                            <img class="img-circle" src="{{asset('storage/icon-consultoria.png')}}" alt="User Avatar">
                                            <h1  class="widget-user-username">{{$user->role->name}}</h1>
                                        </div>
                                        <!-- /.widget-user-image -->
                                        <br>
                                    </div>
                                    <br>
                                    <div class="box-footer no-padding">
                                       <h3 style="text-align: justify">
                                           {{$user->role->sobre}}
                                       </h3>
                                    </div>
                                </div>
                            <!-- /.post -->
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="settings">
                            <form class="form-horizontal" method="post" action="{{url("editar/{$user->id}")}}">
                                @csrf
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Nome</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}"
                                               placeholder="{{ trans('adminlte::adminlte.name') }}" >
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Sobrenome</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="sobrenome" class="form-control" value="{{ $user->sobrenome }}"
                                               placeholder="{{ trans('adminlte::adminlte.sobrenome') }}">
                                        @if ($errors->has('sobrenome'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('sobrenome') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" value="{{ $user->email }}"
                                               placeholder="{{ trans('adminlte::adminlte.email') }}">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputExperience" class="col-sm-2 control-label">Senha</label>

                                    <div class="col-sm-10">
                                        <input type="password" name="password" class="form-control"
                                               placeholder="{{ trans('adminlte::adminlte.password') }}">
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputExperience" class="col-sm-2 control-label">{{ trans('adminlte::adminlte.retype_password') }}</label>

                                    <div class="col-sm-10">
                                        <input type="password" name="password_confirmation" class="form-control">
                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Cep</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="cep" id="cep" class="form-control" value="{{ $user->cep }}"
                                               placeholder="{{ trans('adminlte::adminlte.cep') }}" onkeyup="somenteNumeros(this);" onkeypress="mascara(this, '#####-###')" onblur="pesquisacep(this.value); " maxlength="9">
                                        @if ($errors->has('cep'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('cep') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Logradouro</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="logradouro" id="logradouro" class="form-control"  value="{{ $user->logradouro }}"
                                               placeholder="{{ trans('adminlte::adminlte.logradouro') }}">
                                        @if ($errors->has('logradouro'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('logradouro') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Bairro</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="bairro" id="bairro"  class="form-control" value="{{ $user->bairro }}"
                                               placeholder="{{ trans('adminlte::adminlte.bairro') }}" >
                                        @if ($errors->has('bairro'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('bairro') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Numero</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="numero" id="numero" class="form-control " value="{{ $user->numero }}"
                                               placeholder="{{ trans('adminlte::adminlte.numero') }}" >
                                        @if ($errors->has('numero'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('numero') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Complemento</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="complemento" id="complemento" class="form-control" value="{{ $user->complemento }}"
                                               placeholder="{{ trans('adminlte::adminlte.complemento') }}" >
                                        @if ($errors->has('complemento'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('complemento') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">UF</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="uf" id="uf" class="form-control " value="{{ $user->uf }}"
                                               placeholder="{{ trans('adminlte::adminlte.uf') }}" >
                                        @if ($errors->has('uf'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('uf') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Cidade</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="cidade" id="cidade" class="form-control" value="{{ $user->cidade }}"
                                               placeholder="{{ trans('adminlte::adminlte.cidade') }}" >
                                        @if ($errors->has('cidade'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('cidade') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Cargo</label>

                                    <div class="col-sm-10">
                                        <select class="form-control select2" style="width: 100%;">
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}" @if($role->id == $user->role_id) selected="selected" @endif >{{$role->name}}</option>
                                                @endforeach
                                        </select>
                                        <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        @if ($errors->has('cidade'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('cidade') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Editar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
            </div>
            </div>
        </div>
    </section>
@stop