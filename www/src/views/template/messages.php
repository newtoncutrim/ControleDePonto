<?php

$erros = [];
if($exception) {
    $message = [
        'type' => 'erro',
        'message' => $exception->getMessage()
    ];

    if(get_class($exception) === 'ValidateException') {
        $erros = $exception->getErros();
    }
}


$alertType = '';
if ($message['type'] === 'erro') {
    $alertType = 'danger';
} else {
    $alertType = 'success';
}
?>

<?php if($message):?>
    <div class="my-3 alert alert-<?= $alertType ?>" role="alert">
        <?=$message['message']; ?>
    </div>
<?php endif?>