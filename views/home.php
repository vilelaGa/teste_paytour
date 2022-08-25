<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= $url ?>/views/assets/css/app.css">
    <link rel="shortcut icon" href="https://www.paytour.com.br/wp-content/uploads/2021/06/cropped-favicon-512-c-192x192.png" type="image/x-icon">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Paytour | Teste</title>
</head>

<body>

    <!-- início do preloader -->
    <div id="preloader">
        <div class="inner">
            <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
            <div class="bolas">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- fim do preloader -->

    <nav class="navbar bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://www.paytour.com.br/wp-content/uploads/2021/06/logo-paytour.svg" alt="" class="d-inline-block align-text-top">
            </a>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">

                <div id="resposta">
                    <!-- NOME -->
                    <?php
                    if (isset($_SESSION['Nome-invalido'])) :
                    ?>
                        <div class="alert alert-danger mt-3" role="alert">
                            Nome invalido
                        </div>
                        <style>
                            #nome {
                                border-color: #ff0909 !important;
                                color: #ff0909 !important;
                            }
                        </style>
                    <?php endif;
                    unset($_SESSION['Nome-invalido'])
                    ?>
                    <!-- NOME -->

                    <!-- EMAIL -->
                    <?php
                    if (isset($_SESSION['Email-invalido'])) :
                    ?>
                        <div class="alert alert-danger mt-3" role="alert">
                            Email invalido
                        </div>
                        <style>
                            #email {
                                border-color: #ff0909 !important;
                                color: #ff0909 !important;
                            }
                        </style>
                    <?php endif;
                    unset($_SESSION['Email-invalido'])
                    ?>
                    <!-- EMAIL -->

                    <!-- Telefone -->
                    <?php
                    if (isset($_SESSION['Telefone-invalido'])) :
                    ?>
                        <div class="alert alert-danger mt-3" role="alert">
                            Telefone invalido
                        </div>
                        <style>
                            #telefone {
                                border-color: #ff0909 !important;
                                color: #ff0909 !important;
                            }
                        </style>
                    <?php endif;
                    unset($_SESSION['Telefone-invalido'])
                    ?>
                    <!-- Telefone -->

                    <!-- Cargo -->
                    <?php
                    if (isset($_SESSION['Cargo-invalido'])) :
                    ?>
                        <div class="alert alert-danger mt-3" role="alert">
                            Cargo invalido
                        </div>
                        <style>
                            #cargo {
                                border-color: #ff0909 !important;
                                color: #ff0909 !important;
                            }
                        </style>
                    <?php endif;
                    unset($_SESSION['Cargo-invalido'])
                    ?>
                    <!-- Cargo -->

                    <!-- escolaridade -->
                    <?php
                    if (isset($_SESSION['Escolari-invalido'])) :
                    ?>
                        <div class="alert alert-danger mt-3" role="alert">
                            Selecione a escolaridade
                        </div>
                        <style>
                            #escolaridade {
                                border-color: #ff0909 !important;
                                color: #ff0909 !important;
                            }
                        </style>
                    <?php endif;
                    unset($_SESSION['Escolari-invalido'])
                    ?>
                    <!-- escolaridade -->

                    <!-- file -->
                    <?php
                    if (isset($_SESSION['File-grande'])) :
                    ?>
                        <div class="alert alert-danger mt-3" role="alert">
                            Arquivo execedeu 1MB
                        </div>
                        <style>
                            #upload {
                                border-color: #ff0909 !important;
                                color: #ff0909 !important;
                            }
                        </style>
                    <?php endif;
                    unset($_SESSION['File-grande'])
                    ?>
                    <!-- file -->

                    <!-- Arquivo-invalido -->
                    <?php
                    if (isset($_SESSION['Arquivo-invalido'])) :
                    ?>
                        <div class="alert alert-danger mt-3" role="alert">
                            Arquivo invalido
                        </div>
                        <style>
                            #upload {
                                border-color: #ff0909 !important;
                                color: #ff0909 !important;
                            }
                        </style>
                    <?php endif;
                    unset($_SESSION['Arquivo-invalido'])
                    ?>
                    <!-- Arquivo-invalido -->

                    <!-- file vazio -->
                    <?php
                    if (isset($_SESSION['File-vazio'])) :
                    ?>
                        <div class="alert alert-danger mt-3" role="alert">
                            Selecione um arquivo
                        </div>
                        <style>
                            #upload {
                                border-color: #ff0909 !important;
                                color: #ff0909 !important;
                            }
                        </style>
                    <?php endif;
                    unset($_SESSION['File-vazio'])
                    ?>
                    <!-- file vazio -->
                </div>

                <div class="mt-4">
                    <form action="<?= $url ?>/data/cadastro" method="POST" enctype="multipart/form-data">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nome" name="nome" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Nome <b class="text-danger">*</b></label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="telefone" name="telefone" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Telefone <b class="text-danger">*</b></label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="cargo" name="cargo" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Cargo Desejado <b class="text-danger">*</b></label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-control" id="escolaridade" name="escolaridade">
                                <option>Escolaridade <b class="text-danger">*</b></option>
                                <option>Analfabeto</option>
                                <option>Até 5º Ano Incompleto</option>
                                <option>5º Ano Completo</option>
                                <option>6º ao 9º Ano do Fundamental</option>
                                <option>Fundamental Completo</option>
                                <option>Médio Incompleto</option>
                                <option>Médio Completo</option>
                                <option>Superior Incompleto</option>
                                <option>Superior Completo</option>
                                <option>Mestrado</option>
                                <option>Doutorado</option>
                                <option>Ignorado</option>
                            </select>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email <b class="text-danger">*</b></label>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="obs" name="obs" id="floatingInput" placeholder="name@example.com"></textarea>
                            <label for="floatingInput">Observações</label>
                        </div>

                        <div class="input-group mb-5">
                            <input type="file" class="form-control" id="upload" name="upload" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">1MB <b class="text-danger">*</b></label>
                        </div>

                        <button class="w-100 btn btn-lg btnColor">Enviar</button>
                    </form>
                </div>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <p class="text-center text-light">Desenvolvido por Gabriel Vilela</p>
                    <center>
                        <a style="font-size: 25px;" href="https://www.linkedin.com/in/vilelaga/" target="_blank" class="text-light"><i class="bi bi-linkedin"></i></a>
                        <a style="font-size: 25px;" href="https://github.com/vilelaGa" target="_blank" class="text-light"><i class="bi bi-github"></i></a>
                    </center>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </footer>

    <!-- Mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $('#telefone').mask('(00) 0000-0000')
        });
    </script>

    <script>
        //<![CDATA[
        $(window).on('load', function() {
            $('#preloader .inner').fadeOut();
            $('#preloader').delay(350).fadeOut('slow');
            $('body').delay(350).css({
                'overflow': 'visible'
            });
        })
        //]]>
    </script>

    <!-- EKBALLO -->

</body>

</html>