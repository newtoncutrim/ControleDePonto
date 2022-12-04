<?php
session_start();
requirevalidSession(true);

$exception = null;
if(isset($_GET['delete'])){
    try {
        User::deleteById($_GET['delete']);
        addSuccessMsg('Usuario excluido com sucesso');
    } catch(Exception $e){
        if(stripos($e->getMessage(), 'FOREIGN KEY')) {
            addErrorMsg('Não foi possivel excluir o usuario');
        } else {

            $exception = $e;
        }
    }
}

$users = User::get();
foreach($users as $user){
    $user->start_date = (new DateTime($user->start_date))->format('d/m/Y');
    if($user->end_date){
        $user->end_date = (new DateTime($user->end_date))->format('d/m/Y');

    }
}

LoadTemplateView('users', ['users' => $users, 'exception' => $exception]);