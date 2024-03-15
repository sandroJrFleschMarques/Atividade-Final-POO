<?php
require('./atividade-final/usuario.php');

$id = $_GET['id'];
$logado = $_GET['logado'];
$target = $_GET['target'];
var_dump($id);

foreach ($_SESSION['users'] as $value) {

    for ($i = 0; $i < sizeof($value[0]->tweets); $i++) {
        if ($id == $value[0]->tweets[$i]->id) {
            $key = array_search($logado, $value[0]->tweets[$i]->likes);
            if ($key !== false) {
                unset($value[0]->tweets[$i]->likes[$key]);
            } else {
                array_push($value[0]->tweets[$i]->likes, $logado);
            }
        }
    }
}

header("Location: {$target}");

die();
