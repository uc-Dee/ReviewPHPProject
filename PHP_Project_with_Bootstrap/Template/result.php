<?php
$DIR = __DIR__;
include $DIR."/header.php";
global $smarty;
$response = json_decode(file_get_contents('question.json'));
$response = json_decode(json_encode($response), true);
__ucd(json_decode(json_encode($response[0]['content_text']), true));

$smarty->assign('response_ques',$response);
web_showpage($smarty->fetch('result.tpl'));
?>