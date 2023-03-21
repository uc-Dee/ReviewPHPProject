<?php
/* Smarty version 4.3.0, created on 2023-02-02 12:54:04
  from 'C:\xampp\htdocs\smarty\Learning\template\bare.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63dba45c8c83b3_77286210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0ea8f86d92a43ccee73b33be8a05f10b0dd2449' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Learning\\template\\bare.tpl',
      1 => 1675338767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63dba45c8c83b3_77286210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '179311172963dba45c880904_18715316';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>

<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>

        <?php echo $_smarty_tpl->tpl_vars['user_list']->value[0]['name'];?>
 => <?php echo $_smarty_tpl->tpl_vars['user_list']->value[0]['department'];?>
 </br>
    <?php echo $_smarty_tpl->tpl_vars['user_list']->value[1]['name'];?>
 => <?php echo $_smarty_tpl->tpl_vars['user_list']->value[1]['department'];?>
 </br>
    <?php echo $_smarty_tpl->tpl_vars['user_list']->value[2]['name'];?>
 => <?php echo $_smarty_tpl->tpl_vars['user_list']->value[2]['department'];?>
 </br>
    <?php echo $_smarty_tpl->tpl_vars['user_list']->value[3]['name'];?>
 => <?php echo $_smarty_tpl->tpl_vars['user_list']->value[2]['department'];?>
 </br>

        <?php echo json_encode($_smarty_tpl->tpl_vars['user_list']->value);?>
</br>

        <table>
        <tr>
            <th>Name</th>
            <th>Department</th>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['user_list']->value[0]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user_list']->value[0]['department'];?>
</td>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['user_list']->value[1]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user_list']->value[1]['department'];?>
</td>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['user_list']->value[2]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user_list']->value[2]['department'];?>
</td>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['user_list']->value[3]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user_list']->value[3]['department'];?>
</td>
        </tr>
    </table>


        <table>
        <tr>
            <th>Name</th>
            <th>Department</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_list']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
$__foreach_user_0_saved = $_smarty_tpl->tpl_vars['user'];
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['department'];?>
</td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>

    
    <?php $_smarty_tpl->_assignInScope('name', 2);?>
    <?php if ($_smarty_tpl->tpl_vars['name']->value == 1) {?>
        Smarty is a good language.
    <?php } elseif ($_smarty_tpl->tpl_vars['name']->value == 2) {?>
        smarty is an average language.
    <?php } else { ?>
        smarty is a bad language.
    <?php }?>



    
    <?php echo $_smarty_tpl->tpl_vars['hello']->value;?>

</body>

</html><?php }
}
