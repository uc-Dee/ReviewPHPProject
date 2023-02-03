<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
    <body>
        <h1 style=" color: red; text-align: center; ">{$name}</h1>
        
        {* Users {json_encode($user_list)} *}
       
        {$user_list[0]['name']}  =>  {$user_list[0]['department']} <br/>
        {$user_list[1]['name']}  =>  {$user_list[1]['department']} <br/>
        {$user_list[2]['name']}  =>  {$user_list[2]['department']}

        <h1>For loop</h1>
        {foreach $user_list as $user}
            <li>Name: {$user['name']}, Department: {$user['department']}</li>
        {/foreach}
        
        {assign var="name" value=3 }
        {if $name == '1'} 
            Name is one
        {else if $name == '2'}
            Name is two
        {else}
            Name is different things
        {/if}
        <table>
            <tr>
                <th>S.No.</th>
                <th>Student Name</th>
                <th>Department</th>
            </tr>
           
            {assign var="counter" value=1 }
            {foreach $user_list as $key=>$user}
                <tr>
                    <td>{$user['name']}</td>
                    <td>{$user['department']}</td>
                </tr>
                {* <li>Name: {$user['name']}, Department: {$user['department']}</li> *}
            {/foreach}
        </table>
    </body>
</html>