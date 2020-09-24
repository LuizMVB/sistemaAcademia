<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once 'build/main_page.php';
}else if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if($_GET['page'] == 'register'){
        require_once 'build/register.php';
    }else{
        require_once 'build/login.php';
    }
}