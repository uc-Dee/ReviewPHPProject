<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
<style>
    seq:before {


        content: attr(no);


    }
</style>

{* alert *}
{assign var="val" value={$question_num+1}}
{if isset($user_ans.$val)}
    {foreach from=$answer key=key item=answer_data}
        {if ($answer_data.is_correct) }
            {assign var="correct" value={(65+$key)|chr}}
        {/if}
    {/foreach}
    {if $user_ans.$val == $correct}
        <div class="alert alert-success text-center  alert-dismissible fade show">correct
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    {else}
        <div class="alert alert-danger text-center alert-dismissible fade show">Incorrect
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    {/if}
{else}
    <div class="alert alert-warning text-center alert-dismissible fade show">Unattempted
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
{/if}

{* questions and options *}
<div class='container mt-5'>
    <div id='displayQuestion'><b>{$question_num+1}. {$question}</b></div>
    {foreach from=$answer key=key item=answer_data}
        <span class='mr-4'><b>{(65+$key)|chr}</b></span>
        {assign var='num_incorrect' value=(ord($user_ans.$val)-65)}
        {assign var='num_correct' value=(ord($correct)-65)}

        {* This is to put the bullets for the options  *}
        <input type="radio" class="form-check-input first " name="myRadio" id="radio1">
        {if ($answer_data.is_correct) }
            {assign var="correct" value={(65+$key)|chr}}
        {/if}
        {if isset($user_ans.$val)}
            {if $user_ans.$val==$correct}
                <label for="radio1" class="form-check-label answer_input 
                    {if $answer_data['is_correct'].is_correct}text-success font-weight-bold 
                    {/if}" id='displayOption1'>{$answer_data['answer']}</i></label>
                </label></br>

            {else}

                {if $num_correct == $key}
                    <label for="radio1" class="form-check-label answer_input text-success font-weight-bold" id='displayOption1'>
                        {$answer_data['answer']}
                    </label></br>
                {else if $key == $num_incorrect}
                    <label for="radio1" class="form-check-label answer_input text-danger font-weight-bold" id='displayOption1'>
                        {$answer_data['answer']}
                    </label></br>
                {else}
                    <label for="radio1" class="form-check-label answer_input" id='displayOption1'>
                        {$answer_data['answer']}
                    </label></br>
                {/if}
            {/if}
        {else}
            <label for="radio1" class="form-check-label answer_input 
                {if $answer_data['is_correct'].is_correct}text-success font-weight-bold 
                {/if}" id='displayOption1'>{$answer_data['answer']}</i></label>
            </label></br>
        {/if}
    {/foreach}
    <div class='mt-4'><span><b>Explanation: </b></span>{$explanation}</div>
</div>

{* result *}
<div class="fixed-bottom bg-light rounded border py-2 ml-auto border border-secondary d-flex justify-content-center"
    style="z-index: 10; bottom:10px; width:15%">
    <a class="btn-danger btn mx-3 px-4 " id="home" href="result.php">Result Page</a>
</div>