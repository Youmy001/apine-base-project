<?php
/**
 * APIne Framework Main Execution
 * This script runs basic environment setup and launches userside code
 *
 * @author Tommy Teasdale <tteasdaleroads@gmail.com>
 * @license MIT
 * @copyright 2018 Tommy Teasdale
 */

//die('cat error');

ini_set('display_errors', -1);

//require_once '../Autoloader.php';
//require_once '../src/Autoloader.php';
require_once '../../vendor/autoload.php';

$loader = new Apine\Autoloader();
$loader->register();

$apine = new Apine\Application\Application();

//$apine->set_mode(APINE_MODE_DEVELOPMENT);

//$apine->run(APINE_RUNTIME_HYBRID);

//$apine->registerController('home', \Apine\Controllers\User\HomeController::class);
$apine->registerResource('home', Apine\Controllers\TestController::class);
$apine->registerResource('version', Apine\Controllers\System\VersionController::class);

$apine->run();