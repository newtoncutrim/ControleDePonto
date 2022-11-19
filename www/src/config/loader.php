<?php

function LoadModel($modelName) {
    require_once(MODEL_PATH . "/{$modelName}.php");
}

function LoadView($viewName, $params = array()){
    if(count($params) > 0){
        foreach($params as $key => $value){
            if(strlen($key) > 0) {
                ${$key} = $value;
            }
        }
    }
    require_once(VIEW_PATH . "/{$viewName}.php");
}

function LoadTemplateView($viewName, $params = array())
{
    if (count($params) > 0) {
        foreach ($params as $key => $value) {
            if (strlen($key) > 0) {
                ${$key} = $value;
            }
        }
    }

    $user = $_SESSION['user'];
    $workingHours = WorkingHours::loadFromUserDate($user->id, date('Y-m-d'));

    $workedInterval = $workingHours->getWorkedInterval()->format('%H:%I:%S');
    $exitTime = $workingHours->getExitTime()->format('H:i:s');
    $activeClock = $workingHours->getActiveClock();


    require_once(TEMPLATE_PATH . "/header.php");
    require_once(TEMPLATE_PATH . "/left.php");
    require_once(VIEW_PATH . "/{$viewName}.php");
    require_once(TEMPLATE_PATH . "/footer.php");
}

function renderTitle($title, $subtitle, $icon = null) {
    require_once(TEMPLATE_PATH . "/title.php");
}