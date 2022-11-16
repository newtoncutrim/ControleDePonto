<?php
session_start();
requirevalidSession();

LoadModel('WorkingHours');

$date = (new DateTime())->getTimestamp();
$today = strftime('%d de %B de %Y', $date);

$user = $_SESSION['user'];
$records = WorkingHours::loadFromUserDate($user->id, date('Y-m-d'));

LoadTemplateView('day_records', [
    'today' => $today,
    'records' => $records
]);

