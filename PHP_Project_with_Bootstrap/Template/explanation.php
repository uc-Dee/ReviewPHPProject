<?php
$DIR = __DIR__;
include $DIR . "/header.php";
global $smarty;
session_start();

$current_url = "http".(isset($_SERVER['HTTPS']) ? "s" : "")."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$query_string = parse_url($current_url, PHP_URL_QUERY);
// __ucd($query_string);
parse_str($query_string, $queries);
// It will fetch the data from the url
// __ucd($query_string);
// Fetching the data from json file in the 
$response = json_decode(file_get_contents('question.json'));
$response = json_decode(json_encode($response), true);
// __ucd($queries);
// __ucd($response);

// It means that ki responses ke question number vale index par jakar values ko fetch karo
$question = (json_decode($response[$queries['que']]['content_text']));
$question = json_decode(json_encode($question), true);
// __ucd($question);
// __ucd($question['answers']);   
$user_ans = $_SESSION['answers'];
$smarty->assign('user_ans', $user_ans); 
// __ucd($user_ans);    
// $smarty->assign('question', $question);
// __ucd($question['answers']);
$smarty->assign('answer', $question['answers']);
$smarty->assign('question_num',$queries['que']);
$smarty->assign('question', $question['question']);
$smarty->assign('explanation', $question['explanation']);

web_showpage($smarty->fetch('explanation.tpl'));
?>