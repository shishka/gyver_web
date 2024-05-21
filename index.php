<?php

require 'vendor/autoload.php';
$smarty = new Smarty();
$smarty->setTemplateDir('design/html');
$smarty->setConfigDir('design/config');
$smarty->setCompileDir('design/compile');
$smarty->setCacheDir('design/cache');
$smarty->disableSecurity();
$smarty->allow_php_tag=true;
//$smarty->testInstall();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
//$smarty->assign('name', 'Ned');
$smarty->display('index.tpl');

