<?php
/**
 * APIne Framework Main Execution
 *
 * @author Tommy Teasdale <tteasdaleroads@gmail.com>
 * @license MIT
 * @copyright 2018 Tommy Teasdale
 */

require_once '../vendor/autoload.php';

$loader = new Apine\Autoloader();
$loader->register();

$apine = new Apine\Application\Application();
$apine->run();