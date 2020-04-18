<?php

use Classes\Usuario;
    require './Classes/Usuario.php';

$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$param = filter_input_array(INPUT_GET, FILTER_DEFAULT);

if (isset($data ['salvar'])) {
    $usu = new Usuario();
    $usu->editar($param['codigo'],$data['nome'],$data['email'],$data['login'],$data['senha']);   
   header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <?php if (isset($data ['salvar'])) { ?>
            <script>
                alert("Usuário editado!");
            </script>
        <?php } ?>    
    </head>
    <style>
        body{
            background-color: aqua;

        }
    </style>
    <body >
        <br>
        <div class="container">
            <form action="editar.php?codigo=<?php echo $param['codigo']?>" name="formulario" method="post" class="col-md-6">
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




        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
    </body>
</html>

