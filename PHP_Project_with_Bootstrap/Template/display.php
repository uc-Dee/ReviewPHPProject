<?php

// we include header.php to display the web page and its content
include "header.php";
session_start();

//$smarty->auto_literal = false;
// It will display the content of the json file
// __ucd($_POST);
// It will fetch the questions
if($_POST['func'] == 'get_ques_no') {
    // __ucd($_POST);
    $data = fetchQuestion($_POST['question_no']);
    // __ucd($data[1]);
    displaycontent($data[1]);
}
if($_POST['func'] == 'sessionData') {
    
    $_SESSION['answers'] = json_decode($_POST['answer_data'], true);
    __ucd($_SESSION['answers']);
}
function fetchQuestion($question_no) {
    global $smarty;
    // Fetching the data from json file in the 
    $response = json_decode(file_get_contents('question.json'));
    $response = json_decode(json_encode($response), true);
    // __ucd($response);
    $question = (json_decode($response[$question_no]['content_text']));
    $question = json_decode(json_encode($question), true);
    $smarty->assign('question',$question['question']);
    $smarty->assign('que_no',$question_no);
    $smarty->assign('all_ques',$response);
    $smarty->assign('answers',$question['answers']);
    $HTML = $smarty->fetch('ques_ans.tpl');
    return [$question,$HTML];
}
$question_no = 0; // for this first question
$data = fetchQuestion($question_no);
$question = $data[0];
if($question_no == 0) {
    $smarty->assign('disable_pre',true); 
}

$smarty->assign('question',$question['question']);
$smarty->assign('HTML',$data[1]);
web_showpage($smarty->fetch('testpage.tpl'));
