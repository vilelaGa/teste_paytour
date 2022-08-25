<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= $url ?>/assets/css/app.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Home</title>
</head>

<body>

    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://www.paytour.com.br/wp-content/uploads/2021/06/logo-paytour.svg" alt="" class="d-inline-block align-text-top">
            </a>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <h4 class="text-center mt-5">Envio de currículo</h4>

                <div id="resposta">

                </div>

                <div class="mt-5">
                    <form enctype="multipart/form-data">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nome" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Nome</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="telefone" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Telefone</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="cargo" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Cargo Desejado</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-control" id="escolaridade">
                                <option>Escolaridade</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="obs" id="floatingInput" placeholder="name@example.com"></textarea>
                            <label for="floatingInput">Observações</label>
                        </div>

                        <div class="input-group mb-5">
                            <input type="file" class="form-control" id="upload" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>

                        <button class="w-100 btn btn-lg btn-primary" type="button" onclick="enviar()">Enviar</button>
                    </form>
                </div>

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <!-- Mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $('#telefone').mask('(00) 0000-0000')
        });
    </script>

    <script>
        function enviar() {

            var nome = document.getElementById('nome').value;
            var email = document.getElementById('email').value;
            var telefone = document.getElementById('telefone').value;
            var cargo = document.getElementById('cargo').value;
            var escolaridade = document.getElementById('escolaridade').value;
            var obs = document.getElementById('obs').value;
            var upload = document.getElementById('upload').value;



            $.ajax({

                type: 'POST',
                dataType: 'html',
                url: '<?= $url ?>/data/cadastro',

                //Dados para envio
                data: {
                    nome: nome,
                    email: email,
                    telefone: telefone,
                    escolaridade: escolaridade,
                    obs: obs,
                    upload: upload

                },

                //função que será executada quando a solicitação for finalizada.
                success: function(msg) {
                    $("#resposta").html(msg);
                }
            });

        }
    </script>


</body>

</html>