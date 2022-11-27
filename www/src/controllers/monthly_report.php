<?php
session_start();
requirevalidSession();

$user = $_SESSION['user'];
$currentDate = new DateTime();

$registries = WorkingHours::getMonthlyReport($user->id, $currentDate);

$report = [];
$workDay = 0;
$sumOfWorkedTime = 0;
$lastDay = getLastDayOfMonth($currentDate)->format('d');

for($day = 1; $day <= $lastDay; $day++) {
    $date = $currentDate->format('Y-m') . '-' . $day;
    echo $day . '</br>';
}

// LoadTemplateView('monthly_report', [
//     'registries' => $registries
// ]);



