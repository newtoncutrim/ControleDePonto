<?php

date_default_timezone_set('America/Bahia');
setlocale(LC_ALL, NULL);
setlocale(LC_ALL, 'pt_BR');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

//gerais
define('DAILY_TIME', 60 * 60 * 8);

//pastas
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));
define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views'));
define('TEMPLATE_PATH', realpath(dirname(__FILE__) . '/../views/template'));
define('CONTROLLER_PATH', realpath(dirname(__FILE__) . '/../controllers'));
define('EXCEPTION_PATH', realpath(dirname(__FILE__) . '/../exception'));

//arquivos
require_once(__DIR__ . '/database.php');
require_once(__DIR__ . '/loader.php');
require_once(__DIR__ . '/session.php');
require_once(__DIR__ . '/date_utils.php');
require_once(__DIR__ . '/utils.php');
require_once(realpath(MODEL_PATH . '/model.php'));
require_once(realpath(MODEL_PATH . '/user.php'));
require_once(realpath(MODEL_PATH . '/WorkingHours.php'));
require_once(realpath(EXCEPTION_PATH . '/AppException.php'));
require_once(realpath(EXCEPTION_PATH . '/ValidateException.php'));
