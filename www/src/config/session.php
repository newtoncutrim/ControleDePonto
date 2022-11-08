<?php

function requirevalidSession() {
    $user = $_SESSION['user'];
    if(!isset($user)){
        header('Location: login');
        exit();
    }
}