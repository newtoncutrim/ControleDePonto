<?php

session_start();
requirevalidSession();

$activeUserCount = User::getActiveUserCount();
$absentUsers = WorkingHours::getAbsentUsers();

$yearAndMonth = (new DateTime())->format('Y-m');
$seconds = WorkingHours::getWorkedTimeInMonth($yearAndMonth);
$hoursInMonth = explode(':', getTimeStringFromSeconds($seconds))[0];

LoadTemplateView('manager_report', [
    'activeUserCount' => $activeUserCount,
    'absentUsers' => $absentUsers,
    'hoursInMonth' => $hoursInMonth
]);