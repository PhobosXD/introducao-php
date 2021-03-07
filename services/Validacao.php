<?php

function valida_nome(string $name) : bool {
    $length = strlen($name);
    
    if ($length < 3 || $length > 30) {
        $_SESSION['error-message'] = 'O nome deve conter de 3 a 30 caracteres!';
        return false;
    }

    return true;
}

function valida_idade(string $age) : bool {
    if (!is_numeric($age)) {
        $_SESSION['error-message'] = 'A idade deve conter apenas números!';
        return false;
    }

    return true;
}

?>