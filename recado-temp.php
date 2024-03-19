<?php
require('./atividade-final/usuario.php');

session_start();

$content = $_POST['content'];

$_SESSION['recado-temp'] = array();

array_push($_SESSION['recado-temp'], $content);

var_dump($_SESSION['recado-temp']);

header("Location: action.php");

die();
