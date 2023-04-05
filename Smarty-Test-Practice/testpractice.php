<?php

$DIR = dirname(dirname(__DIR__));
require $DIR.'/libs/Smarty.class.php';
$smarty = new Smarty;  

$smarty->debugging = false;
$smarty->auto_literal = true;

$smarty->display('template/testpractice.tpl');
?>