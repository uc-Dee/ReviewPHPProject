<?php
/* Smarty version 4.3.0, created on 2023-03-14 10:27:49
  from 'C:\xampp\htdocs\smarty\PHP_Project_with_Bootstrap\Template\ques_ans.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64103e15bf2967_61822998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cafa6a08fb849ddf200237e8e0ad8b3c82a4441d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\PHP_Project_with_Bootstrap\\Template\\ques_ans.tpl',
      1 => 1678785708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64103e15bf2967_61822998 (Smarty_Internal_Template $_smarty_tpl) {
?><p><b><?php echo $_smarty_tpl->tpl_vars['question']->value;?>
</p>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['answers']->value, 'answer', false, 'key');
$_smarty_tpl->tpl_vars['answer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['answer']->value) {
$_smarty_tpl->tpl_vars['answer']->do_else = false;
?>
    <input type="radio" id="option_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="options" value="<?php echo $_smarty_tpl->tpl_vars['answer']->value['answer'];?>
">
    <label for="option_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['answer']->value['answer'];?>
</label><br>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
