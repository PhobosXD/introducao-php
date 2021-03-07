<?php

session_start();

function set_error_message(string $message) : void {
    $_SESSION['error-message'] = $message;
}

function get_error_message() : ?string {
    return isset($_SESSION['error-message']) ? $_SESSION['error-message'] : NULL;
}

?>