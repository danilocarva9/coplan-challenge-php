<?php

echo 'Versão Atual do PHP: ' . phpversion();
?>
{{$texto}}<br/>

@if($checagem == true)

    checagem = true <br/>

@else

    checagem = false <br/>

@endif

@foreach($usuarios as $usuario)

    {{$usuario}} <br/>

@endforeach