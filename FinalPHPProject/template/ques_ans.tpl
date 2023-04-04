<p><b>{$que_no + 1}. {$question}</b></p>

{assign var="i" value=0}
{foreach from=$answers item=answer key=key}
    <b>{(65+$i)|chr}</b><input type="radio" onclick="getQueAns(event)" class="get_ans_que ml-2" que="{$que_no + 1}" id="option_{$key}" name="options" value="{(65+$i)|chr}">
    <label for="option_{$key}">{$answer['answer']}</label><br>
    {$i=$i+1}
{/foreach}