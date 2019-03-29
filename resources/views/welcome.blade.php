<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link href="/css/app.css" rel="stylesheet">

    <title>Crud Coplan</title>

</head>
<body onload="load();">
<h2 style="text-align: center">Coplan Challenge</h2>
<div style=" text-align: center;">
    <div style="display: inline-block;">
        <button class="btn-primary" type="button" onclick="window.location='{{ url("Cadastrar") }}'">Cadastrar</button>
        <button class="btn-primary" type="button" onclick="window.location='{{ url("Listar") }}'">Listar</button>
    </div>
</div>
</body>
</html>
