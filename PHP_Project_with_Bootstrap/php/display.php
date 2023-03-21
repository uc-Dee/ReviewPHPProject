<?php

require '../libs/Smarty.class.php';
$smarty = new Smarty; // declare object in Smarty 
$smarty->allow_php_templates = true;
$smarty->setCaching(Smarty::CACHING_LIFETIME_CURRENT);
//$smarty->auto_literal = false;
$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->display("Template/testpage.tpl"); 
?>