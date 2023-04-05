<?php
require '../libs/Smarty.class.php';
$smarty = new Smarty; // declare object in Smarty 

$smarty->assign("option", array('Google', 'Facebook', 'Microsoft')); 
$smarty->assign('radio', array('Deeksha', 'Pooja', 'Prachi'));
$smarty->assign('data', 

    array(

    array('fax' => '555-222-9876',
    'email' => 'megha@ucertify.com',
    'phone' => array(
    'home' => '555-444-3333',
    'cell' => '555-111-1234')), 
    
    array(
    'fax' => '555-222-8876',
    'email' => 'pete.gupta@ucertify.com',
    'phone' => array(
        'home' => '555-444-8888',
        'cell' => '555-111-9999'
    ))));

    $smarty->assign('ourculture', array(
        array('point one', 'to be the best in the world'),
        array('point two', 'we produce the results.'), 
        array('point three', 'We keep our word - We do what we say we will do.'), 
        array('point four', "Coach, mentor and help the team grow.") 
    ));

    $smarty->assign('option', array(1, 2, 3, 4, 5));

$smarty->display('Template/testpracticeagain.tpl');
?>