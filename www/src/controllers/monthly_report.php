<?php
session_start();
requirevalidSession();

$currentDate = new DateTime();
$user = $_SESSION['user'];
$selectdUserId = $user->id;
$users = null;
if($user->is_admin) {
    $users = User::get();
    $selectdUserId =
    $_POST['user'] ? $_POST['user'] : $user->id;
}


$selectdPeriod = $_POST['period'] ? $_POST['period'] : $currentDate->format('Y-m');
$periods = [];
for($yearDiff = 0; $yearDiff <= 2; $yearDiff++){
    $year = date('Y') - $yearDiff;
    for($month = 12; $month >= 1; $month--){
        $date = new DateTime("{$year}-{$month}-1");
        $periods[$date->format('Y-m')] = strftime('%B de %Y', $date->getTimestamp());
    }
}

$registries = WorkingHours::getMonthlyReport($selectdUserId, $selectdPeriod);

$report = [];
$workDay = 0;
$sumOfWorkedTime = 0;
$lastDay = getLastDayOfMonth($currentDate)->format('d');

for($day = 1; $day <= $lastDay; $day++) {
    $date = $currentDate->format('Y-m') . '-' .sprintf('%02d', $day);
    $registry = $registries[$date];

    if(isPastWorkday($date)) $workDay++;

    if($registry) {
        $sumOfWorkedTime += $registry->worked_time;
        array_push($report, $registry);
    } else {
        array_push($report, new WorkingHours([
            'work_date' => $date,
            'worked_time' => 0
        ]));
    }
}

$expectedTime = $workDay * DAILY_TIME;
$balance = getTimeStringFromSeconds(abs($sumOfWorkedTime - $expectedTime));

$sign = ($sumOfWorkedTime >= $expectedTime) ? "+" : '-';




LoadTemplateView('monthly_report', [
    'report' => $report,
    'sumOfWorkedTime' => getTimeStringFromSeconds($sumOfWorkedTime),
    'balance' => "{$sign}$balance",
    'selectdPeriod' => $selectdPeriod,
    'periods' => $periods,
    'users' => $users,
    'selectdUserId' => $selectdUserId,
]);


