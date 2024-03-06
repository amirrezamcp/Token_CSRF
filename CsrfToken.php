<?php

class CsrfToken{
    public static function generate() {
        if(!isset($_SESSION)) {
            session_start();
        }
        $token = bin2hex(random_bytes(32));
        $_SESSION['CSRF_TOKEN'] = $token;
        return $token;
    }

    public static function validate($token) {
        if(!isset($_SESSION)) {
            session_start();
        }
        if(!isset($_SESSION['CSRF_TOKEN']) && ($_SESSION('CSRF_TOKEN') !== $token)) {
            return false;
        }

        unset($_SESSION['CSRF_TOKEN']);
            return true;
    }
}