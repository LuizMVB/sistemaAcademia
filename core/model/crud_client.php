<?php

if(!empty($_SERVER['REQUEST_METHOD'])){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST['email']) && ($_POST['password'])){
            #password_hash($input, PASSWORD_DEFAULT);
            #password_varify($pass, $hashed_pass);
        }
    }
}