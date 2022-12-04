<?php

function requirevalidSession($requiresAdmin = false) {
    $user = $_SESSION['user'];
    if(!isset($user)){
        header('Location: login');
    } elseif ($requiresAdmin && !$user->is_admin) {
        addErrorMsg('Acesso negado');
        header('Location: day_records');
        exit();

    }
}