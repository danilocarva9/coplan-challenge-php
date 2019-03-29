@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
    @yield('css')
@stop

<script type="text/javascript" src="<?php echo asset('js/registro.js')?>"></script>

@section('body_class', 'register-page')

@section('body')
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">{{ trans('adminlte::adminlte.register_message') }}</p>
            <form action="{{ url(config('adminlte.register_url', 'register')) }}" method="post">
                {!! csrf_field() !!}

                <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                           placeholder="{{ trans('adminlte::adminlte.full_name') }}">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('sobrenome') ? 'has-error' : '' }}">
                    <input type="text" name="sobrenome" class="form-control" value="{{ old('sobrenome') }}"
                           placeholder="{{ trans('adminlte::adminlte.sobrenome') }}">
                    @if ($errors->has('sobrenome'))
                        <span class="help-block">
                            <strong>{{ $errors->first('sobrenome') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                           placeholder="{{ trans('adminlte::adminlte.email') }}">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                    <input type="password" name="password" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.password') }}">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.retype_password') }}">
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <hr>
                <div class="form-group has-feedback {{ $errors->has('cep') ? 'has-error' : '' }}">
                    <input type="text" name="cep" id="cep" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.cep') }}" onkeyup="somenteNumeros(this);" onkeypress="mascara(this, '#####-###')" onblur="pesquisacep(this.value); " maxlength="9">
                    @if ($errors->has('cep'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cep') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('logradouro') ? 'has-error' : '' }}">
                    <input type="text" name="logradouro" id="logradouro" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.logradouro') }}">
                    @if ($errors->has('logradouro'))
                        <span class="help-block">
                            <strong>{{ $errors->first('logradouro') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('bairro') ? 'has-error' : '' }}">
                    <input type="text" name="bairro" id="bairro"  class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.bairro') }}" >
                    @if ($errors->has('bairro'))
                        <span class="help-block">
                            <strong>{{ $errors->first('bairro') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback   {{ $errors->has('numero') ? 'has-error' : '' }}">
                    <input type="text" name="numero" id="numero" class="form-control "
                           placeholder="{{ trans('adminlte::adminlte.numero') }}" >
                    @if ($errors->has('numero'))
                        <span class="help-block">
                            <strong>{{ $errors->first('numero') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback  {{ $errors->has('complemento') ? 'has-error' : '' }}">
                    <input type="text" name="complemento" id="complemento" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.complemento') }}" >
                    @if ($errors->has('complemento'))
                        <span class="help-block">
                            <strong>{{ $errors->first('complemento') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback   {{ $errors->has('uf') ? 'has-error' : '' }}">
                    <input type="text" name="uf" id="uf" class="form-control "
                           placeholder="{{ trans('adminlte::adminlte.uf') }}" >
                    @if ($errors->has('uf'))
                        <span class="help-block">
                            <strong>{{ $errors->first('uf') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback  {{ $errors->has('cidade') ? 'has-error' : '' }}">
                    <input type="text" name="cidade" id="cidade" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.cidade') }}" >
                    @if ($errors->has('cidade'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cidade') }}</strong>
                        </span>
                    @endif
                </div>

                <button type="submit"
                        class="btn btn-primary btn-block btn-flat"
                >{{ trans('adminlte::adminlte.register') }}</button>
            </form>
            <div class="auth-links">
                <a href="{{ url(config('adminlte.login_url', 'login')) }}"
                   class="text-center">{{ trans('adminlte::adminlte.i_already_have_a_membership') }}</a>
            </div>
        </div>
        <!-- /.form-box -->
    </div><!-- /.register-box -->
@stop

@section('adminlte_js')
    @yield('js')
@stop
