<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
{* key is not displaying  *}
<div class='container mt-5'>
    <div id='displayQuestion'><b>{$question_num+1}. {$question}</b></div>

    {foreach from=$answer key=key item=answer_data}
                <div class="form-check  mt-2">
                    <span class='mr-4'><b>{(65+$key)|chr}</b></span>
                    <input type="radio" class="form-check-input first " name="myRadio" id="radio1">
                    <label for="radio1"
                        class="form-check-label answer_input {if $answer_data['is_correct'].is_correct}text-success font-weight-bold {/if}"
                        id='displayOption1'>{$answer_data['answer']}</i></label>
                    </label>
                </div>  
    {/foreach}
    <div class='mt-5'><span><b>Explanation: </b></span>{$explanation}</div> 
</div>

{foreach from=$response_ques key=key item=ques_data}
        <span class="ques_{$key+1}">
        {assign var="val" value={$key+1}}
          {if isset($user_ans.$val)}
              {foreach from=$answers key=key item=answer_data}
                {if ($answer_data['is_correct'].is_correct) }
                    {assign var="correct" value={(65+$key)|chr}}
                {/if}
              {/foreach}
              {if $user_ans.$val == $correct}
                <span class="alert alert-success">correct</span>
                {else}
                  <span class="alert alert-danger">Incorrect</span>
              {/if}
            {else}
            <span class="alert alert-warning">Unattempted</span>
          {/if}
        </span>
  {/foreach}

<div class="fixed-bottom bg-light rounded border py-2 ml-auto border border-secondary d-flex justify-content-center"
    style="z-index: 10; bottom:10px; width:15%">
    <a class="btn-danger btn mx-3 px-4 " id="home" href="result.php">Result Page</a>
</div>

