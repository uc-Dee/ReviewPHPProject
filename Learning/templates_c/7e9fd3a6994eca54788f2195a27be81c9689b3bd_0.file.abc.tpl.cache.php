<?php
/* Smarty version 4.3.0, created on 2023-02-02 09:52:21
  from 'C:\xampp\htdocs\smarty\Learning\template\abc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63db79c51327c2_10053089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e9fd3a6994eca54788f2195a27be81c9689b3bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Learning\\template\\abc.tpl',
      1 => 1675321812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63db79c51327c2_10053089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '186880458663db79c507d7b0_77256912';
?>
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
        <h1 style=" color: red; text-align: center; "><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>
        
               
        <?php echo $_smarty_tpl->tpl_vars['user_list']->value[0]['name'];?>
  =>  <?php echo $_smarty_tpl->tpl_vars['user_list']->value[0]['department'];?>
 <br/>
        <?php echo $_smarty_tpl->tpl_vars['user_list']->value[1]['name'];?>
  =>  <?php echo $_smarty_tpl->tpl_vars['user_list']->value[1]['department'];?>
 <br/>
        <?php echo $_smarty_tpl->tpl_vars['user_list']->value[2]['name'];?>
  =>  <?php echo $_smarty_tpl->tpl_vars['user_list']->value[2]['department'];?>


        <h1>For loop</h1>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_list']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            <li>Name: <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
, Department: <?php echo $_smarty_tpl->tpl_vars['user']->value['department'];?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_smarty_tpl->_assignInScope('name', 3);?>
        <?php if ($_smarty_tpl->tpl_vars['name']->value == '1') {?> 
            Name is one
        <?php } elseif ($_smarty_tpl->tpl_vars['name']->value == '2') {?>
            Name is two
        <?php } else { ?>
            Name is different things
        <?php }?>
        <table>
            <tr>
                <th>S.No.</th>
                <th>Student Name</th>
                <th>Department</th>
            </tr>
           
            <?php $_smarty_tpl->_assignInScope('counter', 1);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_list']->value, 'user', false, 'key');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['department'];?>
</td>
                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </body>
</html><?php }
}
