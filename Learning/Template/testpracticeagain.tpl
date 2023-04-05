<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Practice Again</title>
</head>
<body>
    <h1>Smaty Practice Again</h1>
    <p>Example of HTML checkbox</p>
    {html_checkboxes values=$option output=$option sepertor='</br>'}

    <p>Example of Radio</p>
    {html_radios values=$radio output=$radio sepertor='</br>'}

    <p>Example of counter</p>
    {counter}
    {counter}

    {* <p>Example of HTML cycle</p>
    <ul><li class="{cycle values = "green, yellow" loop=1}">
        List
    </li></ul> *}

    {$email = 'deeksha@gmail.com'}
    <p>Example of escaping the value of email</p>
    {$email|escape:'mail'}

    <p>Example of Concatination</p>
    {$str1 = 'Deeksha '}
    {$str2 = 'Kulshreshtha'}
    {$str1|cat:$str2}

    <p>Print the table of 6</p>
    {$start = 6}
    {$end = 60}
    {$step = 6}
    {for $i=$start to $end step $step}
        <li>{$i}</li>
    {/for}

    {* <p>Print the array in Proper Format</p>
    {section name='Deeksha, pooja, prachi' loop=$data}
    <tr class="{cycle values="odd,even"}">
       <td>{$data[rows]}</td>
    </tr>
    {/section} *}

    <ul>
    {$counter = 1}
    {foreach $data as $outerkey => $outervalue}
        {foreach $outervalue as $key => $value}
            {if $counter==3}
                {foreach $value as $innerkey => $innervalue}
                    <li>{$innervalue}</li>
                {/foreach}
            {/if}
            <li>{$value}</li>
            {$counter = $counter + 1}
        {/foreach}
        {$counter = 1}
    {/foreach}
    <ul>

    <p>HTML SelectBox</p>
    {html_options name=box options=$option selected='0'}

    



    

</body>
</html>