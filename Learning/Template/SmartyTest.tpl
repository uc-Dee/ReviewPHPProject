<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smarty Test</title>
</head>
<body>
    <h1>I am the best :)</h1>

    {$option = array(1, 2, 3, 4, 5)}
    <h3>1. Dropdown Box using Smarty</h3>
    {html_options name=box options=$option selected='0'}

    <h3>2. Escape Statement</h3>
    {$email = 'deeksha.kulshreshtha@ucertify.com'}
    {$email|escape:'mail'}

    <h3>3. Table of 5</h3>
    {$start = 5}
    {$end = 50}
    {$step = 5}
    <ul>
    {for $i=$start to $end step $step}
        <li>{$i}</li>
    {/for}
    </ul>

    {$str1 = 'Deeksha '}
    {$str2 = 'Kulshreshtha'}
    <h3>4. Concatination</h3>
    {$str1|cat:$str2}

    <h3>5. Difference between Counter and Cycle</h3>
    <p><b>Counter:</b> Counter is simple a self incrementor</p>
    {counter}</br>{counter}</br>{counter}</br>{counter}</br>

    <p><b>Cycle:</b> Cycle is used to iterate the defined scope.</p>
    {$data = array('Deeksha', 'Pooja', 'prachi')}
    {section name=cycle loop=$data}
    <tr class="{cycle values="odd,even"}">
       <td>{$data[cycle]}</td>
    </tr>
    {/section}

    {* {var_dump($Contacts)} *}
    <h3>6. Values Printing of an Array</h3>
    {$counter = 1}
    <ul>
    {foreach $Contacts as $outerkey => $outervalue}
        {foreach $outervalue as $key => $value}
            <li>{$value}</li>
            {if $counter == 3}
                {foreach $value as $innerkey => $innervalue}
                    <li>{$innervalue}</li>
                {/foreach}
            {/if}
            {$counter = $counter + 1}
        {/foreach}
        {$counter = 1}
        </br>
    {/foreach}
    </ul>

    <h3>7. Perform the operations on the given strings</h3>
    <h5>a)Lower</h5>
    {$str1 = 'DEEKSHA'}
    {$str2 = 'KULSHRESHTHA'}
    {$str1|lower}
    {$str2|lower}

    <h5>b)Replace</h5>
    {$var1 = 'ucertify LEARN is specifically designed to deliver Higher Ed, vocational, workforce development & readiness, and corporate training programs to diverse audiences with different proficiency levels.'}
    {$var2 = ' At ucertify, we believe that assessments are the key to both engaging learners and effective, focused learning.'}
    {$var1|replace:'ucertify':'uCertify'}</br>
    {$var2|replace:'ucertify':'uCertify'}

    <h5>c)WrodWrap</h5>
    {$var1|wordwrap:30}</br>
    {$var2|wordwrap:30}</br>

    <h5>d)Merge</h5>
    {$var3 = "{$var1}{$var2}"}
    {$var3}

    <h3>8. Print the data of array in the form of unordered form</h3>
    <ul>
    {foreach $ourculture as $val}
        {foreach  $val as $value}
            <li>{$value}</li>
        {/foreach}
    {/foreach}
    </ul>

    <h3>9. Checkbox and Radios</h3>
    {$arr = array('Google', 'Microsoft', 'LinkedIn', 'Twitter', 'GenPact')}
    <h5>a) Checkbox</h5>
    {html_checkboxes values=$arr output=$arr seperator="</br>"}
    <h5>b) Radio</h5>
    {html_radios values=$arr output=$arr seperator="</br>"}

    <h3>10. Even Odd and Table Printing</h3>
    {$num = 5}
    {$start = 5}
    {$end = 50}
    {$step = 5}
    <h5>a) Table of {$num}</h5>
    {for $i=$start to $end step $step}
        <li>{$i}</li>
    {/for}
    <h5>b)Even or Odd {$num}?</h5>
    {if $num%2==0}
        <p>Even</p>
    {else}
        <p>Odd</p>
    {/if}

</body>
</html>