<?php
$DIR = __DIR__;
include $DIR . "/header.php";
global $smarty;
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
$question = (json_decode($response[$queries['que']]['content_text']));
$question = json_decode(json_encode($question), true);
// __ucd($question);
// __ucd($question['answers']);
$smarty->assign('answer', $question['answers']);
$smarty->assign('question_num',$queries['que']);
$smarty->assign('question', $question['question']);
$smarty->assign('option1', $question['answers'][0]['answer']);
$smarty->assign('option2', $question['answers'][1]['answer']);
$smarty->assign('option3', $question['answers'][2]['answer']);
$smarty->assign('option4', $question['answers'][3]['answer']);
$smarty->assign('explanation', $question['explanation']);

web_showpage($smarty->fetch('explanation.tpl'));