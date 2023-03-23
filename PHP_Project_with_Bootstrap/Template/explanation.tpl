<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
{* key is not displaying  *}
<div class='container mt-5'>
    <div id='displayQuestion'><b>{$question_num+1}. {$question}</b></div>
    <div>
        <div class="form-check py-2 mt-2">
        <b>{(65)|chr}</b>
            <input type="radio" class="form-check-input first " name="myRadio" id="radio1">
            <label for="radio1"
                class="form-check-label answer_input {if $answer[0]['is_correct'].is_correct}text-success font-weight-bold {/if}"
                id='displayOption1'>{$option1}</i></label>
            </label>
        </div>
        <div class="form-check py-2">
        {(66)|chr}
            <input type="radio" class="form-check-input second" name="myRadio" id="radio2">
            <label for="radio2"
                class="form-check-label answer_input {if $answer[1]['is_correct'].is_correct}text-success font-weight-bold{/if}"
                id='displayOption2'>{$option2}</label>
            </label>
        </div>
        <div class="form-check py-2">
        {(67)|chr}
            <input type="radio" class="form-check-input third" name="myRadio" id="radio3">
            <label for="radio3"
                class="form-check-label answer_input {if $answer[2]['is_correct'].is_correct}text-success font-weight-bold {/if}"
                id='displayOption3'>{$option3}</label>
            </label>
        </div>
        <div class="form-check py-2">
        {(68)|chr}
            <input type="radio" class="form-check-input forth" name="myRadio" id="radio4">
            <label for="radio4"
                class="form-check-label answer_input {if $answer[3]['is_correct'].is_correct}text-success font-weight-bold {/if}"
                id='displayOption4'>{$option4}</label>
            </label>
        </div>

        <div class="form-check py-2 pt-5 mt-2">
            <hr>
            <p class="form-check-label answer_input" id='displayOption4'>{$explanation}</p>
        </div>
    </div>
</div>

<div class="fixed-bottom bg-light rounded border py-2 ml-auto border border-secondary d-flex justify-content-center"
    style="z-index: 10; bottom:10px; width:15%">
    <a class="btn-danger btn mx-3 px-4 " id="home" href="result.php">Result Page</a>
</div>