<?php
require './Classes/Usuario.php';

use Classes\Usuario;

$usu = new Usuario();

$usuarios = $usu->listar();
?><!DOCTYPE html>
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

    </head>

    <body>

        <h1 class="site-heading text-center text-white d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">Tabela De Usuarios</span>
        </h1> 

        <section class="page-section">
            <div class="container">
                <div class="bg-faded rounded p-5">      
                    <table style="width:100%" border="3px">
                         <tr>
                            <th scope="col">Codigo</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Login</th>
                            <th scope="col">Opção</th>
                        </tr>
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
                    <br>
                <a href="adicionar.php"><button class="btn btn-primary">Novo Cadastro</button></a>   
            </div>
                     
                </div>
            </div>
        </section>



        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
