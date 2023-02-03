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

// Assignment practice
$smarty->assign("name", "Deeksha"); 
$smarty->assign("statment", "Smarty is smarty"); 
$smarty->assign("role", "Web Application Developer"); 
$smarty->assign("position", "Web Application Developer Trainee"); 
$smarty->assign("Fav Faculty", "Dean Sir"); 

//Creating Array
$smarty->assign('arr1', array(
    'name' => 'Deeksha Kulshreshtha', 
    'email id' => 'deeksha.kulshreshtha@ucertify.com', 
    'mobile number' => array(
        'mn1' => '4234729374', 
        'mn2' => '8409234809',
        )
    )
); 

$smarty->assign('arr2', array('deekshakulshreshtha', 'deeksha.kulshreshtha@ucertify.com', array("489238302", "743208432"))); 
$smarty->assign('book1', 'gelvin silbersctaz'); 
$smarty->assign('book2', 'Geeta'); 
$smarty->assign('book3', 'Atomic Habits');

//Assigning a passage to an array
$smarty->assign('passage', 'Hello Im deeksha kulshreshtha. I am application programmer and I 
                love to code. 
                I believe in when your passion become your profession then your chances of learning 
                automatically become 100x from usual cases. 
                I love to code. Coding is my passion and profession to.'); 

$smarty->assign('employeeID', ' '); 
$smarty->assign('emailaddress', 'deeksha.kulshreshtha@ucertify.com'); 
$smarty->assign('foo', 66); 
$smarty->assign('start', 1); 
$smarty->assign('to', 50); 
$smarty->assign('step', 2); 

$smarty->assign('arr', array(1,2,3,4,5,6,7,8)); 
$smarty->assign('cust_ids', array(1000,1001,1002,1003)); 

$smarty->assign('cust_names', array('Joe Schmoe',
                                    'Jack Smith',
                                    'Jane Johnson',
                                    'Charlie Brown')); 

$smarty->assign('cutomer_id', 1001); 
$later = strtotime('+20days'); 
$smarty->assign('later', $later); 

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

$smarty->assign("user_list", $users); 

$user2 = array(
       array("name" => "Deeksha", 
             "role" => "Web Developer"
       )
); 

//asking smarty to display the content
$smarty->display('template/Suryafileclone.tpl'); 
    
?>