<?php

$categorias = [];

$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';

#print_r($categorias);

$nome = 'Cazuza';
$idade = 20;

#var_dump($nome);
#var_dump($idade);

if ($idade >= 6 && $idade <= 12) {
    print($categorias[0]);
} else if ($idade > 12 && $idade <= 18) {
    print($categorias[1]);
} else if ($idade > 18) {
    print($categorias[2]);
} else {
    echo('Idade inválida!');
}

?>
