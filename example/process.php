<?php
include_once 'CsrfToken.php';

if(isset($_POST['login_btn'])) {
    $token = $_POST['csrf_token'];
    if(CsrfToken::validate($token)) {
        echo "valid token";
    }else{
        echo 'invalid token';
    }
}