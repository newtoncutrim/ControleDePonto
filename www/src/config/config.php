<?php

date_default_timezone_get('America/Sao_Paulo');
setlocale(LC_TIME. 'pt_BR', 'pt_BR.utf-8', 'portuguese');

//pastas
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));
define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views'));
define('TEMPLATE_PATH', realpath(dirname(__FILE__) . '/../views/template'));
define('CONTROLLER_PATH', realpath(dirname(__FILE__) . '/../controllers'));
define('EXCEPTION_PATH', realpath(dirname(__FILE__) . '/../exception'));

//arquivos
require_once(__DIR__ . '/database.php');
require_once(__DIR__ . '/loader.php');
require_once(realpath(MODEL_PATH . '/model.php'));
require_once(realpath(EXCEPTION_PATH . '/AppException.php'));
require_once(realpath(EXCEPTION_PATH . '/ValidateException.php'));
