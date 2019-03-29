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

<div>
    <button class="btn-primary" type="button" onclick="window.location='{{ url("Index") }}'">Voltar</button>
</div>

<meta name="csrf-token" content="{{ csrf_token() }}"/>

<div class="input-group mb-3" style="margin-top: 20px">
    <input type="hidden" id="usuario_id">
    Nome: <input style="margin-right: 20px" type="text" id="nome" required="required" name="nome"><br>
    Sobrenome: <input style="margin-right: 20px" type="text" id="sobrenome" required="required" name="sobrenome"><br>
    Endereço: <input style="margin-right: 20px" type="text" id="endereco" name="endereco"><br>
    Cargo: <input style="margin-right: 20px" type="text" id="cargo" name="cargo"><br>
    <buttonstyle="margin-left: 20px" class="btn-primary" onclick="submit();">Enviar
    </button>
</div>

<script type="text/javascript">
    data = "";
    submit = function () {
        $.ajax({
            url: 'api/saveOrUpdate',
            type: 'POST',
            data: {
                usuario_id: $("#usuario_id").val(),
                nome: $('#nome').val(),
                sobrenome: $('#sobrenome').val(),
                endereco: $('#endereco').val(),
                cargo: $('#cargo').val()
            },
            success: function (response) {
                alert(response.message);
            }
        });
        document.getElementById("nome").value = " ";
        document.getElementById("sobrenome").value = " ";
        document.getElementById("endereco").value = "";
        document.getElementById("cargo").value = "";
    }

</script>
</body>
</html>
