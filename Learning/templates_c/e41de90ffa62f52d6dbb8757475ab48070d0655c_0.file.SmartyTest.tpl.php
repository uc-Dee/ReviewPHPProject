<?php
/* Smarty version 4.3.0, created on 2023-03-23 05:19:25
  from 'C:\xampp\htdocs\smarty\Learning\Template\SmartyTest.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641bd34ddcd822_95136902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e41de90ffa62f52d6dbb8757475ab48070d0655c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Learning\\Template\\SmartyTest.tpl',
      1 => 1679047559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641bd34ddcd822_95136902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.escape.php','function'=>'smarty_modifier_escape',),2=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),3=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),4=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),5=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.mb_wordwrap.php','function'=>'smarty_modifier_mb_wordwrap',),6=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),7=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),));
?>
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

    <?php $_smarty_tpl->_assignInScope('option', array(1,2,3,4,5));?>
    <h3>1. Dropdown Box using Smarty</h3>
    <?php echo smarty_function_html_options(array('name'=>'box','options'=>$_smarty_tpl->tpl_vars['option']->value,'selected'=>'0'),$_smarty_tpl);?>


    <h3>2. Escape Statement</h3>
    <?php $_smarty_tpl->_assignInScope('email', 'deeksha.kulshreshtha@ucertify.com');?>
    <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value, 'mail');?>


    <h3>3. Table of 5</h3>
    <?php $_smarty_tpl->_assignInScope('start', 5);?>
    <?php $_smarty_tpl->_assignInScope('end', 50);?>
    <?php $_smarty_tpl->_assignInScope('step', 5);?>
    <ul>
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
    </ul>

    <?php $_smarty_tpl->_assignInScope('str1', 'Deeksha ');?>
    <?php $_smarty_tpl->_assignInScope('str2', 'Kulshreshtha');?>
    <h3>4. Concatination</h3>
    <?php echo ($_smarty_tpl->tpl_vars['str1']->value).($_smarty_tpl->tpl_vars['str2']->value);?>


    <h3>5. Difference between Counter and Cycle</h3>
    <p><b>Counter:</b> Counter is simple a self incrementor</p>
    <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</br><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</br><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</br><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</br>

    <p><b>Cycle:</b> Cycle is used to iterate the defined scope.</p>
    <?php $_smarty_tpl->_assignInScope('data', array('Deeksha','Pooja','prachi'));?>
    <?php
$__section_cycle_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_cycle_0_total = $__section_cycle_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cycle'] = new Smarty_Variable(array());
if ($__section_cycle_0_total !== 0) {
for ($__section_cycle_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cycle']->value['index'] = 0; $__section_cycle_0_iteration <= $__section_cycle_0_total; $__section_cycle_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cycle']->value['index']++){
?>
    <tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
       <td><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cycle']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cycle']->value['index'] : null)];?>
</td>
    </tr>
    <?php
}
}
?>

        <h3>6. Values Printing of an Array</h3>
    <?php $_smarty_tpl->_assignInScope('counter', 1);?>
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Contacts']->value, 'outervalue', false, 'outerkey');
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
            <li><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
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
            <?php $_smarty_tpl->_assignInScope('counter', $_smarty_tpl->tpl_vars['counter']->value+1);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_smarty_tpl->_assignInScope('counter', 1);?>
        </br>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

    <h3>7. Perform the operations on the given strings</h3>
    <h5>a)Lower</h5>
    <?php $_smarty_tpl->_assignInScope('str1', 'DEEKSHA');?>
    <?php $_smarty_tpl->_assignInScope('str2', 'KULSHRESHTHA');?>
    <?php echo mb_strtolower((string) $_smarty_tpl->tpl_vars['str1']->value, 'UTF-8');?>

    <?php echo mb_strtolower((string) $_smarty_tpl->tpl_vars['str2']->value, 'UTF-8');?>


    <h5>b)Replace</h5>
    <?php $_smarty_tpl->_assignInScope('var1', 'ucertify LEARN is specifically designed to deliver Higher Ed, vocational, workforce development & readiness, and corporate training programs to diverse audiences with different proficiency levels.');?>
    <?php $_smarty_tpl->_assignInScope('var2', ' At ucertify, we believe that assessments are the key to both engaging learners and effective, focused learning.');?>
    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['var1']->value,'ucertify','uCertify');?>
</br>
    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['var2']->value,'ucertify','uCertify');?>


    <h5>c)WrodWrap</h5>
    <?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['var1']->value,30,"\n",false);?>
</br>
    <?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['var2']->value,30,"\n",false);?>
</br>

    <h5>d)Merge</h5>
    <?php $_smarty_tpl->_assignInScope('var3', ((string)$_smarty_tpl->tpl_vars['var1']->value).((string)$_smarty_tpl->tpl_vars['var2']->value));?>
    <?php echo $_smarty_tpl->tpl_vars['var3']->value;?>


    <h3>8. Print the data of array in the form of unordered form</h3>
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ourculture']->value, 'val');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['val']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

    <h3>9. Checkbox and Radios</h3>
    <?php $_smarty_tpl->_assignInScope('arr', array('Google','Microsoft','LinkedIn','Twitter','GenPact'));?>
    <h5>a) Checkbox</h5>
    <?php echo smarty_function_html_checkboxes(array('values'=>$_smarty_tpl->tpl_vars['arr']->value,'output'=>$_smarty_tpl->tpl_vars['arr']->value,'seperator'=>"</br>"),$_smarty_tpl);?>

    <h5>b) Radio</h5>
    <?php echo smarty_function_html_radios(array('values'=>$_smarty_tpl->tpl_vars['arr']->value,'output'=>$_smarty_tpl->tpl_vars['arr']->value,'seperator'=>"</br>"),$_smarty_tpl);?>


    <h3>10. Even Odd and Table Printing</h3>
    <?php $_smarty_tpl->_assignInScope('num', 5);?>
    <?php $_smarty_tpl->_assignInScope('start', 5);?>
    <?php $_smarty_tpl->_assignInScope('end', 50);?>
    <?php $_smarty_tpl->_assignInScope('step', 5);?>
    <h5>a) Table of <?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</h5>
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
    <h5>b)Even or Odd <?php echo $_smarty_tpl->tpl_vars['num']->value;?>
?</h5>
    <?php if ($_smarty_tpl->tpl_vars['num']->value%2 == 0) {?>
        <p>Even</p>
    <?php } else { ?>
        <p>Odd</p>
    <?php }?>

</body>
</html><?php }
}
