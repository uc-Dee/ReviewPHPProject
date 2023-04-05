<?php
require '../libs/Smarty.class.php';
$smarty = new Smarty; // declare object in Smarty 

$smarty->assign('check', array('10', '20', '30'));
$smarty->assign('radio', array('Deeksha', 'Kulshreshtha', 'uCertify'));
$smarty->assign('email', 'deeksha@gmail.com');
$smarty->assign('var1', 'hello');
$smarty->assign('var1', 'hello,');
$smarty->assign('var2', 'World!');

$smarty->assign('data', array(
    array('fax' => '555-222-9876',
    'email' => 'megha@ucertify.com',
    'phone' => array(
    'home' => '555-444-3333',
    'cell' => '555-111-1234')), array(

    'fax' => '555-222-8876',
    'email' => 'pete.gupta@ucertify.com',
    'phone' => array(
        'home' => '555-444-8888',
        'cell' => '555-111-9999'
    ))));

$smarty->assign('str1', 'uCertify LEARN is specifically designed to deliver Higher Ed, vocational, workforce development & readiness, and corporate training programs to diverse audiences with different proficiency levels.
');

$smarty->assign('str2', 'At uCertify, we believe that assessments are the key to both engaging learners and effective, focused learning.');

$smarty->assign('ourculture', array(
    array('point one', 'to be the best in the world'),
    array('point two', 'we produce the results.'), 
    array('point three', 'We keep our word - We do what we say we will do.'), 
    array('point four', "Coach, mentor and help the team grow.") 
));

$smarty->assign('selectbox', array(1, 2, 3, 4, 5));
$smarty->assign('num', 11);

$smarty->display('template/testpractice.tpl'); 
?>