<?php
require './Classes/Usuario.php';

use Classes\Usuario;

$usu = new Usuario();
$usuarios = $usu->listar();

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Lista de Usuarios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    </head>
    <style>
        body{
            background-color: aqua;

        }
    </style>
    <body>
        <br>
        <div class="container">
            <div class="col-md-10">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Codigo</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Login</th>
                            <th scope="col">Opção</th>
                        </tr>
                    </thead>
                    <tbody>      

                        <?php foreach ($usuarios as $index => $usuario) { ?>                    
                            <tr>
                                <td><?php echo $usuario ['codigo']; ?></td>
                                <td><?php echo $usuario ['nome']; ?></td>
                                <td><?php echo $usuario ['email']; ?></td>
                                <td><?php echo $usuario ['login']; ?></td>
                                <td>
                                    <a href="editar.php?codigo=<?php echo $usuario ['codigo']; ?>">Editar</a> |
                                    <a href="eliminar.php?codigo=<?php echo $usuario ['codigo']; ?>">Excluir</a>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
                <a href="adicionar.php"><button>Novo Cadastro</button></a>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
    </body>
</html>