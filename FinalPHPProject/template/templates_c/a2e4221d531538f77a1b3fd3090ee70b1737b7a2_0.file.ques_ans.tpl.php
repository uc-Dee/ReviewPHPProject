<?php
/* Smarty version 4.3.0, created on 2023-04-04 19:38:32
  from 'C:\xampp\htdocs\smarty\FinalPHPProject\template\ques_ans.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642c6098a8c128_60913874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2e4221d531538f77a1b3fd3090ee70b1737b7a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\FinalPHPProject\\template\\ques_ans.tpl',
      1 => 1680629833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642c6098a8c128_60913874 (Smarty_Internal_Template $_smarty_tpl) {
?><p><b><?php echo $_smarty_tpl->tpl_vars['que_no']->value+1;?>
. <?php echo $_smarty_tpl->tpl_vars['question']->value;?>
</b></p>

<?php $_smarty_tpl->_assignInScope('i', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['answers']->value, 'answer', false, 'key');
$_smarty_tpl->tpl_vars['answer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['answer']->value) {
$_smarty_tpl->tpl_vars['answer']->do_else = false;
?>
    <b><?php echo chr((65+$_smarty_tpl->tpl_vars['i']->value));?>
</b><input type="radio" onclick="getQueAns(event)" class="get_ans_que ml-2" que="<?php echo $_smarty_tpl->tpl_vars['que_no']->value+1;?>
" id="option_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="options" value="<?php echo chr((65+$_smarty_tpl->tpl_vars['i']->value));?>
">
    <label for="option_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['answer']->value['answer'];?>
</label><br>
    <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
