<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>

<body>
    <h1>{$name}</h1>

    {* showing array data key by key *}
    {$user_list[0]['name']} => {$user_list[0]['department']} </br>
    {$user_list[1]['name']} => {$user_list[1]['department']} </br>
    {$user_list[2]['name']} => {$user_list[2]['department']} </br>
    {$user_list[3]['name']} => {$user_list[2]['department']} </br>

    {* showing the data of array in collective manner *}
    {json_encode($user_list)}</br>

    {* Showing the data of an array in tabular form *}
    <table>
        <tr>
            <th>Name</th>
            <th>Department</th>
        </tr>
        <tr>
            <td>{$user_list[0]['name']}</td>
            <td>{$user_list[0]['department']}</td>
        </tr>
        <tr>
            <td>{$user_list[1]['name']}</td>
            <td>{$user_list[1]['department']}</td>
        </tr>
        <tr>
            <td>{$user_list[2]['name']}</td>
            <td>{$user_list[2]['department']}</td>
        </tr>
        <tr>
            <td>{$user_list[3]['name']}</td>
            <td>{$user_list[3]['department']}</td>
        </tr>
    </table>


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

{* 
    </br>
    </br>
    {foreach $user_list as $contact}
        {foreach $contact as $key => $value}
            {$key}: {$value}
        {/foreach}
    {/foreach} *}


    {* {hello } *}

    {$hello}
</body>

</html>