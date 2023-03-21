<p><b>{$que_no + 1}. {$question}</p>

{assign var="i" value=0}
{foreach from=$answers item=answer key=key}
    {(65+$i)|chr}<input type="radio" onclick="getQueAns(event)" class="get_ans_que" que="{$que_no + 1}" id="option_{$key}" name="options" value="{(65+$i)|chr}">
    <label for="option_{$key}">{$answer['answer']}</label><br>
    {$i=$i+1}
{/foreach}