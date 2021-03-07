<?php
/** Created by PhobosXD */

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$name = $_POST['name'];
$age = $_POST['age'];

if (strlen($name) < 3 || strlen($name) > 30) {
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter de 3 a 30 caracteres!';
    header('location: /');
}

if (!is_numeric($age)) {
    $_SESSION['mensagem-de-erro'] = 'A idade deve conter apenas números!';
    header('location: /');
}

if ($age >= 6 && $age < 12) {
    echo $name.' você está na categoria '.$categorias[0];
} else if ($age >= 12 && $age < 18) {
    echo $name.' você está na categoria '.$categorias[1];
} else if ($age >= 18) {
    echo $name.' você está na categoria '.$categorias[2];
} else {
    echo 'A idade deve ser um número positivo!';
}