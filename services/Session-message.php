<?php

session_start();

function set_error_message(string $message) : void {
    $_SESSION['error-message'] = $message;
}

function get_error_message() : ?string {
    return isset($_SESSION['error-message']) ? $_SESSION['error-message'] : NULL;
}

function set_sucess_message(string $message) : void {
    $_SESSION['sucess-message'] = $message;
}

function get_sucess_message() : ?string {
    return isset($_SESSION['sucess-message']) ? $_SESSION['sucess-message'] : NULL;
}

function delete_error_message() : void {
    if (isset($_SESSION['error-message'])) {
        unset($_SESSION['error-message']);
    }
}

function delete_sucess_message() : void {
    if (isset($_SESSION['sucess-message'])) {
        unset($_SESSION['sucess-message']);
    }
}

?>