<?php

include "header.php";
session_start();

if($_POST['func'] == 'get_ques_no') {
    $data = fetchQuestion($_POST['question_no']);
    displaycontent($data[1]);
}

if($_POST['func'] == 'sessionData') {
    
    $_SESSION['answers'] = json_decode($_POST['answer_data'], true);
    __ucd($_SESSION['answers']);
}
function fetchQuestion($question_no) {
    global $smarty;
    $response = json_decode(file_get_contents('question.json'));
    $response = json_decode(json_encode($response), true);
    $question = (json_decode($response[$question_no]['content_text']));
    $question = json_decode(json_encode($question), true);
    $smarty->assign('question',$question['question']);
    $smarty->assign('que_no',$question_no);
    $smarty->assign('all_ques',$response);
    $smarty->assign('answers',$question['answers']);
    $HTML = $smarty->fetch('ques_ans.tpl');
    return [$question,$HTML];
}
$question_no = 0; 
$data = fetchQuestion($question_no);
$question = $data[0];
if($question_no == 0) {
    $smarty->assign('disable_pre',true); 
}

$smarty->assign('question',$question['question']);
$smarty->assign('HTML',$data[1]);
web_showpage($smarty->fetch('testpage.tpl'));
