<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="/css/app.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <title>Crud Coplan</title>

</head>
<body onload="load();">

<div>
    <button class="btn-primary" type="button" onclick="window.location='{{ url("Index") }}'">Voltar</button>
</div>

<div style="text-align: center; margin-top: 20px">
    <div class="input-group mb-3" style="text-align: center">
        <input type="hidden" id="usuario_id">
        Nome: <input style="margin-right: 20px" type="text" id="nome" required="required" name="nome"><br>
        Sobrenome: <input style="margin-right: 20px" type="text" id="sobrenome" required="required" name="sobrenome"><br>
        Endereço: <input style="margin-right: 20px" type="text" id="endereco" name="endereco"><br>
        Cargo: <input style="margin-right: 20px" type="text" id="cargo" name="cargo"><br>
        <button  style="margin-left: 20px" class="btn-primary" onclick="submit();">Enviar</button>
    </div>
</div>

<table class="table " id="table" border=1>
    <tr>
        <th> Nome</th>
        <th> Sobrenome</th>
        <th> Endereco</th>
        <th> Cargo</th>
        <th> Editar</th>
        <th> Deletar</th>
    </tr>
</table>

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
                document.location.reload();
                document.getElementById("nome").value = " ";
                document.getElementById("sobrenome").value = " ";
                document.getElementById("endereco").value = "";
                document.getElementById("cargo").value = "";
            }
        });
    }

    load = function () {
        $.ajax({
            url: 'api/listar',
            type: 'POST',
            success: function (response) {
                data = response.data;
                $('.tr').remove();
                for (i = 0; i < response.data.length; i++) {
                    $("#table").append("<tr class='tr'> <td> " + response.data[i].nome + "  </td> <td> " + response.data[i].sobrenome + " </td> <td> " + response.data[i].endereco + " </td> <td> " + response.data[i].cargo + " </td> <td> <a href='#' onclick= edit(" + i + ");> Editar </a>  </td> </td> <td> <a href='#' onclick='delete_(" + response.data[i].usuario_id + ");'> Delete </a>  </td> </tr>");
                }
            }

        });
    };
    edit = function (index) {
        $("#usuario_id").val(data[index].usuario_id);
        $("#nome").val(data[index].nome);
        $("#sobrenome").val(data[index].sobrenome);
        $("#endereco").val(data[index].endereco);
        $("#cargo").val(data[index].cargo);
    };

    delete_ = function (id) {
        $.ajax({
            url: 'api/deletar',
            type: 'POST',
            data: {usuario_id: id},
            success: function (response) {
                alert(response.message);
                load();
            }
        });
    }
</script>
</body>
</html>
