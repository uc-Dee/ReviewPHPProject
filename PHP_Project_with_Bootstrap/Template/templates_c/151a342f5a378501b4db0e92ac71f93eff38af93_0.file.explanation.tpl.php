<?php
/* Smarty version 4.3.0, created on 2023-03-22 17:40:27
  from 'C:\xampp\htdocs\smarty\PHP_Project_with_Bootstrap\Template\explanation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641b2f7bc7ef10_10851234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '151a342f5a378501b4db0e92ac71f93eff38af93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\PHP_Project_with_Bootstrap\\Template\\explanation.tpl',
      1 => 1679503210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641b2f7bc7ef10_10851234 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .img1 {
        mix-blend-mode: multiply;
    }

    .my_nav {
        margin: 0px 7px;
    }

    .green {
        color: green;
        font-weight: bold;
    }
</style>

<?php echo '<?php'; ?>

$jsindex=$_GET['jsindex'];
// echo $jsindex;
<?php echo '?>'; ?>



<div class='container'>
    <div id='displayQuestion'><b><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
. <?php echo $_smarty_tpl->tpl_vars['question']->value;?>
</b></div>
    <div>
        <div class="form-check py-2">
            <input type="radio" class="form-check-input first" name="myRadio" id="radio1">
            <label for="radio1" class="form-check-label answer_input" id='displayOption1'><?php echo $_smarty_tpl->tpl_vars['option1']->value;?>
</label>
            </label>
        </div>
        <div class="form-check py-2">
            <input type="radio" class="form-check-input second" name="myRadio" id="radio2">
            <label for="radio2" class="form-check-label answer_input" id='displayOption2'><?php echo $_smarty_tpl->tpl_vars['option2']->value;?>
</label>
            </label>
        </div>
        <div class="form-check py-2">
            <input type="radio" class="form-check-input third" name="myRadio" id="radio3">
            <label for="radio3" class="form-check-label answer_input" id='displayOption3'><?php echo $_smarty_tpl->tpl_vars['option3']->value;?>
</label>
            </label>
        </div>
        <div class="form-check py-2">
            <input type="radio" class="form-check-input forth" name="myRadio" id="radio4">
            <label for="radio4" class="form-check-label answer_input" id='displayOption4'><?php echo $_smarty_tpl->tpl_vars['option4']->value;?>
</label>
            </label>
        </div>

        <div class="form-check py-2 pt-5">
            <hr>
            <p class="form-check-label answer_input" id='displayOption4'><?php echo $_smarty_tpl->tpl_vars['explanation']->value;?>
</p>
        </div>
    </div>
</div>

<div class="fixed-bottom bg-light rounded border py-2 ml-auto border border-secondary d-flex justify-content-center"
    style="z-index: 10; bottom:10px; width:15%">
    <a class="btn-danger btn mx-3 px-4 " id="home" href="result.php">Result Page</a>
</div>




</div>
<?php echo '<script'; ?>
>
    var jsindex = < ? php echo $jsindex; ? > ;
    $.getJSON('question.json', function(data) {
        var questionAnswers = JSON.parse(data[jsindex].content_text);
        console.log(questionAnswers);
        $('#displayQuestion').text(questionAnswers.question);
        $('#displayOption1').text(questionAnswers.answers[0].answer);
        $('#displayOption1').addClass('add' + questionAnswers.answers[0].is_correct);
        $('.first').val(questionAnswers.answers[0].answer);
        $('#displayOption2').text(questionAnswers.answers[1].answer);
        $('#displayOption2').addClass('add' + questionAnswers.answers[1].is_correct);
        $('.second').val(questionAnswers.answers[1].answer);
        $('#displayOption3').text(questionAnswers.answers[2].answer);
        $('#displayOption3').addClass('add' + questionAnswers.answers[2].is_correct);
        $('.third').val(questionAnswers.answers[2].answer);
        $('#displayOption4').text(questionAnswers.answers[3].answer);
        $('#displayOption4').addClass('add' + questionAnswers.answers[3].is_correct);
        $('.forth').val(questionAnswers.answers[3].answer);

        //  $.getJSON('question.json', function(data) {
        // var question = data[jsindex].content_text;
        // var parsedQuestion = JSON.parse(question);
        // var correctAnswer = "";

        // $.each(questionAnswers.answers, function(index, value) {
        //     if (value.is_correct == "1") {
        //     correctAnswer = value.answer;
        //     return false; 
        //     }
        // });
        // console.log(correctAnswer)
        const tdElements = document.querySelectorAll('.add1');
        for (let i = 0; i < tdElements.length; i++) {
            tdElements[i].classList.add('green');
        }
        // $('.ans').text(correctAnswer);
        // if (selectedText == correctAnswer){
        //   correctChoose++;

        // }
    });
    // });
<?php echo '</script'; ?>
><?php }
}
