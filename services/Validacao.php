<?php

function valida_nome(string $name) : bool {
    $length = strlen($name);
    
    if ($length < 3 || $length > 30) {
        set_error_message('O nome deve conter de 3 a 30 caracteres!');
        return false;
    }

    return true;
}

function valida_idade(string $age) : bool {
    if (!is_numeric($age)) {
        set_error_message('A idade deve conter apenas números positivos!');
        return false;
    }

    return true;
}

?>