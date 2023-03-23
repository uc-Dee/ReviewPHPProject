<?php
$DIR = __DIR__;
include $DIR."/header.php";
global $smarty;
session_start();
// __ucd($_SESSION);
$response = json_decode(file_get_contents('question.json'));
$response = json_decode(json_encode($response), true);
// __ucd($response);
$res_new = json_decode($response[0]['content_text']);
$response_ans = json_decode(json_encode($res_new), true);
// __ucd($response_ans);    
$smarty->assign('response_ques',$response);
$smarty->assign('user_ans',$_SESSION['answers']);
web_showpage($smarty->fetch('result.tpl'));
?>
