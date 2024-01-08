<?php

LoadModel('login');
session_start();
$exception = null;

if(count($_POST) > 0){
    $login = new Login($_POST);
    /* var_dump($login); */
    try{
        $user = $login;/* ->CheckLogin() */
        $_SESSION['user'] = $user;
        header("Location: day_records");
    } catch(AppException $e) {
        $exception = $e;
    }
}

LoadView('login', $_POST + ['exception' => $exception]);