<?php
//controller teste

LoadModel('workingHours');

$wh = WorkingHours::loadFromUserDate(1, date('Y-m-d'));
$workedIntervalString = $wh->getWorkedInterval()->format('%H:%I:%S');
print_r($workedIntervalString);