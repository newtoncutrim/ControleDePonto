<?php

LoadModel('login');
$exception = null;

if(count($_POST) > 0){
    $login = new Login($_POST);
    try{
        $user = $login->CheckLogin();
        // var_dump('CheckLogin');
        header("Location: day_records");
    } catch(AppException $e) {
        $exception = $e;
    }
}

LoadView('login', $_POST + ['exception' => $exception]);