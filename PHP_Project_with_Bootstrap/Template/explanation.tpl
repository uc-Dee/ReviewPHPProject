<style>
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

<?php
$jsindex=$_GET['jsindex'];
// echo $jsindex;
?>

{* <div class="p-5 position-relative">
    <div class="d-flex justify-content-center">
        <div class="alert alert-danger border-left" role="alert">
            <span class="font-weight-bold"><i class="fa-solid fa-xmark"></i> Incorrect</span>
        </div>
        <!-- <div class="alert alert-success border-left" role="alert">
            <span class="font-weight-bold"><i class="fa-solid fa-check"></i>  correct</span>
        </div> -->
    </div> *}

<div class='container'>
    <div id='displayQuestion'><b>{$key}. {$question}</b></div>
    <div>
        <div class="form-check py-2">
            <input type="radio" class="form-check-input first" name="myRadio" id="radio1">
            <label for="radio1" class="form-check-label answer_input" id='displayOption1'>{$option1}</label>
            </label>
        </div>
        <div class="form-check py-2">
            <input type="radio" class="form-check-input second" name="myRadio" id="radio2">
            <label for="radio2" class="form-check-label answer_input" id='displayOption2'>{$option2}</label>
            </label>
        </div>
        <div class="form-check py-2">
            <input type="radio" class="form-check-input third" name="myRadio" id="radio3">
            <label for="radio3" class="form-check-label answer_input" id='displayOption3'>{$option3}</label>
            </label>
        </div>
        <div class="form-check py-2">
            <input type="radio" class="form-check-input forth" name="myRadio" id="radio4">
            <label for="radio4" class="form-check-label answer_input" id='displayOption4'>{$option4}</label>
            </label>
        </div>

        <div class="form-check py-2 pt-5">
            <hr>
            <p class="form-check-label answer_input" id='displayOption4'>{$explanation}</p>
        </div>
    </div>
</div>

<div class="fixed-bottom bg-light rounded border py-2 ml-auto border border-secondary d-flex justify-content-center"
    style="z-index: 10; bottom:10px; width:15%">
    <a class="btn-danger btn mx-3 px-4 " id="home" href="result.php">Result Page</a>
</div>




</div>
<script>
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
</script>