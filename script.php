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
    $_SESSION['error-message'] = 'O nome deve conter de 3 a 30 caracteres!';
    header('location: /');
    return;
} else if (!is_numeric($age)) {
    $_SESSION['error-message'] = 'A idade deve conter apenas números!';
    header('location: /');
    return;
}

if ($age >= 6 && $age < 12) {
    $_SESSION['sucess-message'] = $name.' você está na categoria '.$categorias[0];
    header('location: /');
} else if ($age >= 12 && $age < 18) {
    $_SESSION['sucess-message'] = $name.' você está na categoria '.$categorias[1];
    header('location: /');
} else if ($age >= 18) {
    $_SESSION['sucess-message'] = $name.' você está na categoria '.$categorias[2];
    header('location: /');
} else {
    $_SESSION['error-message'] = 'A idade deve ser um número positivo!';
    header('location: /');
}