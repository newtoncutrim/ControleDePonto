<?php
session_start();
requirevalidSession(true);

$exception = null;
$userData = [];

if(count($_POST) === 0 && isset($_GET['update'])){
    $user = User::getOne(['id' => $_GET['update']]);
    $userData = $user->getValues();
    $userData['password'] = null;
} elseif(count($_POST) > 0){
    try {
        $newUser = new User($_POST);
        if($newUser->id) {
            $newUser->update();
            addSuccessMsg('Usuario alterado com sucesso');
            header('Location: users');
            exit();
        } else {

            $newUser->insert();
            addSuccessMsg('Usuario cadastrado com sucesso');
        }
        $_POST = [];
    } catch (Exception $e) {
        $exception = $e;
    } finally {
        $userData = $_POST;
    }
}

LoadTemplateView('save_user', ['exception' => $exception]);
