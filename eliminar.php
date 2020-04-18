<?php

require './Classes/Usuario.php';

use Classes\Usuario;

$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$param = filter_input_array(INPUT_GET, FILTER_DEFAULT);
$click;
if (isset($data['excluir'])) {
    $click = true;
};

if ($click = true) {

    if (isset($param['codigo'])) {

        $usu = new Usuario();
        $usu->delete($param['codigo']);
    }
}
header("Location:index.php");
?>