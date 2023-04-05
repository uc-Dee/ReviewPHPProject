<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Practice</title>
</head>
<body>
    <h1>Smarty and PHP test Practice</h1>

    <p>Example of HTML checkboxes</p>
    {html_checkboxes values=$check output=$check seperator="</br>"}

    <p>Example of HTML Radios</p>
    {html_radios values=$radio output=$radio seperator="</br>"}

    <p>Example of HTML counter</p>
    {counter}

    <p>Example of another counter</p>
    {counter}

    <p>Example of HTML cycle</p>
    <ul><li class="{cycle values = "green, yellow" loop=1}">
        List
    </li></ul>

    <p>Example of Escape :</p>
    {$email|escape:'mail'}

    <p>Example of Concatination: </p>
    {$str1|cat: $str2}

    <p>Nested Array</p>
    <ul>
    {foreach $data as $key => $value}
        {foreach $value as $inindex => $invalue}
            {foreach $invalue as $innindex => $innvalue}
                <li>{$innvalue}</li>
            {/foreach}
        </br>
        <li>{$invalue}</li>
        {/foreach}
    {$break = 'newcontent'}
    {$break}
    {/foreach}
    </ul>
    {* <p>Array Print</p>
    <ul>
    {foreach $data as $newdata}
        {newdata}
    {/foreach}
    </ul></p> *}

    <p>Perform the certain operations on string</p>
    <p>Lower Case: </p>
    {$str1|lower}

    <p>Replacing Operations</p>
    {$str1|replace: 'uCertify':'ucertify'}</br>
    {$str2|replace: 'uCertify':'ucertify'}
    
    <p>Word Wrapping</p>
   <span> {$str1|wordwrap:2}</span>
    {$str2|wordwrap:10}

    {assign var=result value="{$var1}{$var2}"}
    {$result}

    <p>Print array in ul list:</p>
    <ul>

    
    {foreach $ourculture as $culture}
    {foreach $culture as $key}
        <li>{$key}</li></br>
    {/foreach}
    {/foreach}

    <p>Examples of selectbox: </p>
    {html_options name=box options=$selectbox selected='0'}

    <p>Checking whether the number is even or odd</p>
    {if $num%2==0}
        <p>Even</p></br>
        {else}
            <p>odd</p></br>
    {/if}
    {$start =6}
    {$end =60}
    {$step =6}
    <p>Table of 6</p>
    {for $i=$start to $end step $step}
        <li>{$i}</li>
    {/for}
 
    {$name = 'Deeksha'}</br>
    {$name}



</body>
</html>