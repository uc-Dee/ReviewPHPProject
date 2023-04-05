<?php
/* Smarty version 4.3.0, created on 2023-03-17 09:25:10
  from 'C:\xampp\htdocs\smarty\Learning\Template\testpracticeagain.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641423e6d1e0c0_21310892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15f4b2b55b91243628ab5c2686f0ae4cf928bcc0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Learning\\Template\\testpracticeagain.tpl',
      1 => 1679041506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641423e6d1e0c0_21310892 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),2=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),3=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.escape.php','function'=>'smarty_modifier_escape',),4=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
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
    <?php echo smarty_function_html_checkboxes(array('values'=>$_smarty_tpl->tpl_vars['option']->value,'output'=>$_smarty_tpl->tpl_vars['option']->value,'sepertor'=>'</br>'),$_smarty_tpl);?>


    <p>Example of Radio</p>
    <?php echo smarty_function_html_radios(array('values'=>$_smarty_tpl->tpl_vars['radio']->value,'output'=>$_smarty_tpl->tpl_vars['radio']->value,'sepertor'=>'</br>'),$_smarty_tpl);?>


    <p>Example of counter</p>
    <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

    <?php echo smarty_function_counter(array(),$_smarty_tpl);?>


    
    <?php $_smarty_tpl->_assignInScope('email', 'deeksha@gmail.com');?>
    <p>Example of escaping the value of email</p>
    <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value, 'mail');?>


    <p>Example of Concatination</p>
    <?php $_smarty_tpl->_assignInScope('str1', 'Deeksha ');?>
    <?php $_smarty_tpl->_assignInScope('str2', 'Kulshreshtha');?>
    <?php echo ($_smarty_tpl->tpl_vars['str1']->value).($_smarty_tpl->tpl_vars['str2']->value);?>


    <p>Print the table of 6</p>
    <?php $_smarty_tpl->_assignInScope('start', 6);?>
    <?php $_smarty_tpl->_assignInScope('end', 60);?>
    <?php $_smarty_tpl->_assignInScope('step', 6);?>
    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = $_smarty_tpl->tpl_vars['step']->value;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
        <li><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</li>
    <?php }
}
?>

    
    <ul>
    <?php $_smarty_tpl->_assignInScope('counter', 1);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'outervalue', false, 'outerkey');
$_smarty_tpl->tpl_vars['outervalue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['outerkey']->value => $_smarty_tpl->tpl_vars['outervalue']->value) {
$_smarty_tpl->tpl_vars['outervalue']->do_else = false;
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['outervalue']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['counter']->value == 3) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value, 'innervalue', false, 'innerkey');
$_smarty_tpl->tpl_vars['innervalue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['innerkey']->value => $_smarty_tpl->tpl_vars['innervalue']->value) {
$_smarty_tpl->tpl_vars['innervalue']->do_else = false;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['innervalue']->value;?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <li><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
            <?php $_smarty_tpl->_assignInScope('counter', $_smarty_tpl->tpl_vars['counter']->value+1);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_smarty_tpl->_assignInScope('counter', 1);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <ul>

    <p>HTML SelectBox</p>
    <?php echo smarty_function_html_options(array('name'=>'box','options'=>$_smarty_tpl->tpl_vars['option']->value,'selected'=>'0'),$_smarty_tpl);?>




    

</body>
</html><?php }
}
