<?php

include 'services/Validacao.php';
include 'services/Session-message.php';
include 'services/Categoria.php';

$name = $_POST['name'];
$age = $_POST['age'];

set_categoria($name, $age);