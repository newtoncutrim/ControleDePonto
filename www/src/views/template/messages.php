<?php

$erros = [];

if(isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
} elseif($exception) {
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];

    if(get_class($exception) === 'ValidateException') {
        $erros = $exception->getErros();
    }
}

// alerta
$alertType = '';
if ($message['type'] === 'error') {
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
