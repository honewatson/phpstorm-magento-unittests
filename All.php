<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

date_default_timezone_set('Australia/Melbourne');

$mageFilename = 'app/Mage.php';

require_once $mageFilename;

umask(0);

Mage::setIsDeveloperMode(true);

$mageRunCode = isset($_SERVER['MAGE_RUN_CODE']) ? $_SERVER['MAGE_RUN_CODE'] : '';
$mageRunType = isset($_SERVER['MAGE_RUN_TYPE']) ? $_SERVER['MAGE_RUN_TYPE'] : 'store';

Mage::init($mageRunCode, $mageRunType);