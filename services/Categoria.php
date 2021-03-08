<?php

function set_categoria(string $name, string $age) : ?string {
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    
    if (valida_nome($name) && valida_idade($age)) {
        if ($age >= 6 && $age < 12) {
            set_sucess_message('O nadador '.$name.' está na categoria '.$categorias[0]);
        } else if ($age >= 12 && $age < 18) {
            set_sucess_message('O nadador '.$name.' está na categoria '.$categorias[1]);
        } else ($age >= 18) {
            set_sucess_message('O nadador '.$name.' está na categoria '.$categorias[2]);
        }

        return null;
    } else {
        return get_error_message();
    }
}

?>