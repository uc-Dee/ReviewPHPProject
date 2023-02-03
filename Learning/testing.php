<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require '../libs/Smarty.class.php';
//error_reporting(E_ALL);
//ini_set('display_errors','On');
//$smarty->debugging_ctrl = ($_SERVER['SERVER_NAME'] == 'localhost') ? 'URL' : 'NONE';
$smarty = new Smarty; // declare object in Smarty 
$smarty->allow_php_templates = true;
$smarty->setCaching(Smarty::CACHING_LIFETIME_CURRENT);
//$smarty->auto_literal = false;
$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$users = array(
    array(
        "name" => "Deeksha",
        "department" => "CS"
    ),
    array(
        "name" => "Deeksha 2",
        "department" => "EE"
    ),   
    array(
        "name" => "Deeksha 3",
        "department" => "EC"
    ),   
);

// $json_data = [{"name": "Deeksha", "deparment": "CS"}, {"name": "Deeksha 2", "deparment": "EE"}];
$smarty->assign('user_list', $users);

$smarty->assign("name", "Deeksha");    // declaring and assigning value to a variable 
$smarty->display('template/abc.tpl');  // asking smarty to show the data to the user under template abc.tpl file

exit;

?>