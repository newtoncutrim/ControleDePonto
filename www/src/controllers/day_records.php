<?php
session_start();
requirevalidSession();

$date = (new DateTime())->getTimestamp();
$today = strftime('%d de %B de %Y', $date);

LoadTemplateView('day_records', ['today' => $today]);
