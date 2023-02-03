<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smarty Learning</title>
</head>

<body>

    {* {$name} *}

    {* Accessing the values from the array *}
    <div class="info">
        <li>User_Name: {$arr1['name']}</li>
        <li>Email Id: {$arr1['email id']}</li>
        <li>Mobile Numbers: {$arr1['mobile number']['mn1']}, {$arr1['mobile number']['mn2']}</li>
    </div>


    {* accessing the data of array in one go *}
    </br>
    <h2>Accessing the data of array in one go</h2></br>
    <div class="info">{json_encode($arr1)}</div>


    {* printing the array using index *}
    </br>
    <h2>Accessing Array using indexing</h2></br>

    <div class="info">
        <li>User Name: {$arr2[0]}</li>
        <li>Email Id: {$arr2[1]}</li>
        <li>Phone Number 1: {$arr2[2][0]}</li>
        <li>Phone Number 2: {$arr2[2][1]}</li>
    </div>

    {config_load file = 'config/foo.conf'}

    {* <h3>*** Attribute ***</h3> *}

    {* <div class="info">
        <p>*** Substring ***</p>
        {assign var=foo value=substr($Name,6,6)}
        {$foo} <br>
        <p>*** String length ***</p>
        {assign var=foo value=$Name|strlen}
        {$foo} <br>
    </div> *}

    <h2>Functions in Smarty</h2>
    {* There we can use only those values that we have already defined in the php file earlier we can use only those values 
    that we have already assigned in .php *}
    <div class="info">
        <p>Substring</p>

        {* Substr("String", 'starting index', "end"): Substring is a function in php that ask us to trim a string. 
        string: The string that we are suppose to trim. 
        Starting index: The index from where we are suppose to start. 
                        Positive value: Specified position
                        Negative value: Positions from the end
                        Zero: Means from the starting
        End: It specifies the length of the ending string

        It is an optional parameter if we leave it as blank it means that it will consider the entire length of 
                        the string.  *}

        {assign var=foo value=substr($name,0,7)}
        {$foo} <br>

        <h2>String length</h2>
        {assign var=foo value=strlen($name)} {* It will assign the length of the string to the foo variable *}
        {$foo} <br>

    </div>

    <h2>Counter Variable</h2>

    {* Counter : Counter is an iterator variable in smarty
        Start : From which number we are suppose to start. 
        Skip: How many steps we want to iterate in each go. *}

    <div class="info">
        {counter start = 10 skip = 20}</br>
        {counter} </br>
        {counter} </br>
        {counter} </br>
        {counter} </br>
    </div>

    <h2>We are now playing with funcitons</h2>

    {* function function_name = fucntion_name_value*}
    {function name = mybooks}
        <ul class="info">
            <li>{$book1}</li>
            <li>{$book2}</li>
            <li>{$book3}</li>
        </ul>
    {/function}

    {mybooks}

    {* This is yet to be done *}
    <div class="info">
        <button onclick="p()">click me</button>
    </div>

    <h2>Variable Modifier</h2>
    <div class="info">
        <h3>Capitalization</h3>
        {$book1}</br>
        {$book1|capitalize}</br>
        {$book1|capitalize:true}</br>
    </div>

    <h2>Lower Case</h2>
    <div class="info">
        {$book1}</br>
        {$book1|lower}
    </div>

    <h2>Printing the current time</h2>
    <div class="info">
        {$smarty.now|date_format: '%Y-%m-%d %H:%M:%S'}
    </div>

    <h2>UPPER</h2>
    <div class="info">
        {$book1}</br>
        {$book1|UPPER}
    </div>

    <h3>Printing the current time</h3>
    <div class="info">
        {$smarty.now|date_format: '%Y-%m-%d %H:%M:%S'}
    </div>

    <h2>String Concatination</h2>
    <div class="info">
        {$book1|cat:" is my favourite book for operating system"}
    </div>

    <h3>Printing the current time</h3>
    <div class="info">
        {$smarty.now|date_format: '%Y-%m-%d %H:%M:%S'}
    </div>

    <h3>Count Chatacters</h3>
    <div class="info">
        {$book1}</br>
        {$book1|count_characters}</br>
        {$book1|count_characters: true}</br>
    </div>

    <h3>Count Words</h3>
    <div class="info">
        {$book1}</br>
        {$book1|count_words}</br>
        {$book1|count_words: true}</br>
    </div>

    <h3>Count Chatacters</h3>
    <div class="info">
        {$smarty.now|count_characters}</br>
        {$smarty.now|count_characters: true}</br>
    </div>

    <h3>Count Paragraph</h3>
    {$passage}
    {$passage|count_paragraphs}</br>
    {$passage|count_paragraphs: true}</br>

    <h3>Count Sentences</h3>
    {$passage}
    {$passage|count_sentences}</br>
    {$passage|count_sentences: true}</br>

    <h3>Count Paragraph</h3>
    {$passage}
    {$passage|count_paragraphs}</br>
    {$passage|count_paragraphs: true}</br>

    {$passage|default:"Not Available"}</br>
    <p>Employee Id: {$employeeID|default: "Will update soon"}</p>

    <h3>Replace</h3>
    {$passage|replace: "deeksha": "Deeksha"}

    <h3>Escape</h3>
    {* <a href="mailto:{$EmailAddress|escape:'hex'}">{$EmailAddress|escape:'mail'}</a> *}
    <a herf="mailto: {$emailaddress}"> {$emailaddress|escape:'mail'}</a>

    <h3>Spacify</h3>
    {$book1}</br>
    {$book1|spacify}</br>
    {$book1|spacify:"$$"}</br>

    {* <p>*** Trancate ***</p>
        {$Passage|truncate:30} <br>
        {$Passage|truncate:30:'..':true:ture} <br>
        {$Passage|truncate:30:"----"} <br> *}

    {* What truncate basically do is it will avoid other characters apart from the given length. It will avoid those characters *}
    <h3>Truncate</h3>
    {$passage|truncate:100}</br>

    <h3>Combining Modifiers</h3>
    {$book2|upper|spacify:"&&"|count_words}</br>

    <h3>Word Wrap</h3>
    {$passage|wordwrap:100:"<br/>":true} {* it will send the characters onto the next line after the threshold limit *}

    <h1 style="Text-align:Center;">Built In Function</h1>
    <div class="info">
        <h3>Appending the element to the array</h3>
        {append var = "arr1" value="meerut" index = "address"}
        <p>Array1 has been updated</p>
        {json_encode($arr1)}</br>

        <h3>Data has been replaced with the new value</h3>
        {append var = "arr1" value = "Noida" index = "address"}
        {json_encode($arr1)}

        {* <p>*** Capture ***</p>

        {capture append="A"}XXYYAAZZ{/capture}
        My name is
        {capture append="A"}XXYYAAZZ{/capture} *} {* This is yet to be done*}


        {* Creating the table using loop *}
        <table>
            <tr>
                <th>Name</th>
                <th>Department</th>
            </tr>
            {foreach $user_list as $user}
                <tr>
                    <td>{$user['name']}</td>
                    <td>{$user['department']}</td>
                </tr>
            {/foreach}
        </table>

        {* {foreach $user_data as $user}
    <li>{$user@key} : {$value}</li>
{/foreach} *}

        {assign var = "name" value = 2}
        {if $name == 1}
            Smarty is a good language.
        {else if $name == 2}
            smarty is an average language.
        {else}
            smarty is a bad language.
        {/if}

    </div>

    {* Syntax of for loop for $var=$start to $end step $step*}
    <h3>For Loop</h3>
    {for $i=$start to $to step $step}
        <li>{$i}</li>
    {/for}

    {$start = 10}
    {$to = 5}
    {$step = -1}

    <h3>Forelse Loop</h3>
    <ul>
        {for $i=$start to $to step $step }
            <li>{$i}</li>
        {forelse}
            no iteration
        {/for}
    </ul>


</body>

<script>
    function p() {
        alert("You have clicked the button");
    }
</script>

</html>