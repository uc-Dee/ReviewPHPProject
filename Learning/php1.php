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

// Assigning a value to a variable
$smarty->assign("name", "Deeksha"); 

// Creating an array
$users = array(
    array("name" => "Deeksha", 
           "department" => "CS"), 
    
    array("name" => "Manya",
           "department" => "CS"),

    array('name' => 'Sandhya', 
          'department' => 'CS'),
    
    array('name' => 'Bhanu', 
           'department' => 'EE')
);

$user2 = array(
       array("name" => "Deeksha", 
             "role" => "Web Developer"
       )
); 

// $fruits_name = array(
       
// )

$smarty -> assign ("hello", 'bob');
$smarty->assign("user_data", $user2); 

// Practising assigning the variables


// assigning array data to a variable
$smarty->assign('user_list', $users); 

//Asking smarty to display the values
$smarty->display("template/bare.tpl"); 

?>