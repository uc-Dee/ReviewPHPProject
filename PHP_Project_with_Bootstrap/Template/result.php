<?php
$DIR = __DIR__;
include $DIR."/header.php";
global $smarty;
session_start();

// The array of answers that we stored on the session
// __ucd($_SESSION);
$response = json_decode(file_get_contents('question.json'));
$response = json_decode(json_encode($response), true);

// it contains the entire array with all the indexes
$total_correct = 0;
$total_incorrect = 0;
$res_new = json_decode($response[0]['content_text']);
$response_ans = json_decode(json_encode($res_new), true);
$user_ans = $_SESSION['answers'];
$correct = '';

// This response_ans contains both the questions and the answers. 
foreach($response as $key => $res_data) {
    if($user_ans[$key+1]) {
        $answer_new = json_decode(json_encode($res_data), true);
        $answer_new = json_decode($answer_new['content_text']);
        $answer_new = json_decode(json_encode($answer_new), true);
        foreach($answer_new['answers'] as $d => $answe_p){
            if($answe_p['is_correct']) {
                $correct = chr(65 + $d);
            }
        }
        if($user_ans[$key+1] == $correct) {
            $total_correct = $total_correct +1;
        }else{
            $total_incorrect+=1;
        }
    }
}

$result = number_format((($total_correct/sizeof($response))*100), 2);
// __ucd($response[0]['content_text']['answers']); 
$smarty->assign('response_ques',$response);
$smarty->assign('total_correct',$total_correct);
$smarty->assign('total_incorrect',$total_incorrect);
$smarty->assign('result',$result);
$smarty->assign('user_ans',$user_ans);
$smarty->assign('unattempted', sizeof($response)-sizeof($_SESSION['answers']));
web_showpage($smarty->fetch('result.tpl'));
