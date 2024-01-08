<?php
session_start();
requirevalidSession();

LoadModel('workinghours');

$date = (new DateTime())->getTimestamp();
$today = strftime('%d de %B de %Y', $date);

LoadTemplateView('day_records', [
    'today' => $today
]);

