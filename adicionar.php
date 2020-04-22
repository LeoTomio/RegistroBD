<?php

use Classes\Usuario;
require './Classes/Usuario.php';

$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (isset($data ['salvar'])) {
    
    $usu = new Usuario();
    $usu->inserir($data ['nome'], $data ['email'], $data ['login'], $data ['senha']);
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Business Casual - Start Bootstrap Theme</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/business-casual.min.css" rel="stylesheet">
        <?php if (isset($data ['salvar'])) { ?>
            <script>
                alert("Usuário cadastrado com sucesso !");
            </script>
        <?php } ?> 
    </head>

    <body>

        <h1 class="site-heading text-center text-white d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">Adicionar Novo Usuario</span>
        </h1> 

        <section class="page-section">
            <div class="container">
                <div class="bg-faded rounded p-5">      
                    <div class="container">
                        <form action="adicionar.php" name="formulario" method="post" class="col-md-6">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input id="nome" class="form-control" type="text" name="nome" placeholder="Informe seu nome" required>
                            </div>
                            <div class="form-group">
                                <label for="e-mail">E-mail</label>
                                <input id="m" class="form-control" type="email" name="email" placeholder="Informe seu E-mail" required>
                            </div>
                            <div class="form-group">
                                <label for="login">Login</label>
                                <input id="login" class="form-control" type="text" name="login" placeholder="Escolha seu Login"  required>
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input id="senha" class="form-control" type="password" name="senha" placeholder="********"  required>
                            </div>                
                            <div class="form-group">
                                <label for="senha-confirma">Confirmar Senha</label>
                                <input id="senha-confirma" class="form-control" type="password" name="senha-confirma" placeholder="********" required>
                            </div>              
                            <div class="form-group">
                                <button type="submit" id="salvar" name="salvar" class="btn btn-primary" >Enviar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>



        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
