<?php
/* Smarty version 4.3.0, created on 2023-03-17 05:33:35
  from 'C:\xampp\htdocs\smarty\Learning\template\testpractice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6413ed9fcb23f1_40542322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9aac46320c99cbe990152f3bbbe53d962a862433' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Learning\\template\\testpractice.tpl',
      1 => 1679027608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6413ed9fcb23f1_40542322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),2=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),3=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),4=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.escape.php','function'=>'smarty_modifier_escape',),5=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),6=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.mb_wordwrap.php','function'=>'smarty_modifier_mb_wordwrap',),7=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
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
    <?php echo smarty_function_html_checkboxes(array('values'=>$_smarty_tpl->tpl_vars['check']->value,'output'=>$_smarty_tpl->tpl_vars['check']->value,'seperator'=>"</br>"),$_smarty_tpl);?>


    <p>Example of HTML Radios</p>
    <?php echo smarty_function_html_radios(array('values'=>$_smarty_tpl->tpl_vars['radio']->value,'output'=>$_smarty_tpl->tpl_vars['radio']->value,'seperator'=>"</br>"),$_smarty_tpl);?>


    <p>Example of HTML counter</p>
    <?php echo smarty_function_counter(array(),$_smarty_tpl);?>


    <p>Example of another counter</p>
    <?php echo smarty_function_counter(array(),$_smarty_tpl);?>


    <p>Example of HTML cycle</p>
    <ul><li class="<?php echo smarty_function_cycle(array('values'=>"green, yellow",'loop'=>1),$_smarty_tpl);?>
">
        List
    </li></ul>

    <p>Example of Escape :</p>
    <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value, 'mail');?>


    <p>Example of Concatination: </p>
    <?php echo ($_smarty_tpl->tpl_vars['str1']->value).($_smarty_tpl->tpl_vars['str2']->value);?>


    <p>Nested Array</p>
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value, 'invalue', false, 'inindex');
$_smarty_tpl->tpl_vars['invalue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inindex']->value => $_smarty_tpl->tpl_vars['invalue']->value) {
$_smarty_tpl->tpl_vars['invalue']->do_else = false;
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invalue']->value, 'innvalue', false, 'innindex');
$_smarty_tpl->tpl_vars['innvalue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['innindex']->value => $_smarty_tpl->tpl_vars['innvalue']->value) {
$_smarty_tpl->tpl_vars['innvalue']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['innvalue']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </br>
        <li><?php echo $_smarty_tpl->tpl_vars['invalue']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php $_smarty_tpl->_assignInScope('break', 'newcontent');?>
    <?php echo $_smarty_tpl->tpl_vars['break']->value;?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    
    <p>Perform the certain operations on string</p>
    <p>Lower Case: </p>
    <?php echo mb_strtolower((string) $_smarty_tpl->tpl_vars['str1']->value, 'UTF-8');?>


    <p>Replacing Operations</p>
    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['str1']->value,'uCertify','ucertify');?>
</br>
    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['str2']->value,'uCertify','ucertify');?>

    
    <p>Word Wrapping</p>
   <span> <?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['str1']->value,2,"\n",false);?>
</span>
    <?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['str2']->value,10,"\n",false);?>


    <?php $_smarty_tpl->_assignInScope('result', ((string)$_smarty_tpl->tpl_vars['var1']->value).((string)$_smarty_tpl->tpl_vars['var2']->value));?>
    <?php echo $_smarty_tpl->tpl_vars['result']->value;?>


    <p>Print array in ul list:</p>
    <ul>

    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ourculture']->value, 'culture');
$_smarty_tpl->tpl_vars['culture']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['culture']->value) {
$_smarty_tpl->tpl_vars['culture']->do_else = false;
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['culture']->value, 'key');
$_smarty_tpl->tpl_vars['key']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</li></br>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <p>Examples of selectbox: </p>
    <?php echo smarty_function_html_options(array('name'=>'box','options'=>$_smarty_tpl->tpl_vars['selectbox']->value,'selected'=>'0'),$_smarty_tpl);?>


    <p>Checking whether the number is even or odd</p>
    <?php if ($_smarty_tpl->tpl_vars['num']->value%2 == 0) {?>
        <p>Even</p></br>
        <?php } else { ?>
            <p>odd</p></br>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('start', 6);?>
    <?php $_smarty_tpl->_assignInScope('end', 60);?>
    <?php $_smarty_tpl->_assignInScope('step', 6);?>
    <p>Table of 6</p>
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
 
    <?php $_smarty_tpl->_assignInScope('name', 'Deeksha');?></br>
    <?php echo $_smarty_tpl->tpl_vars['name']->value;?>




</body>
</html><?php }
}
