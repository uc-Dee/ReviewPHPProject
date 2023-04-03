<?php
/* Smarty version 4.3.0, created on 2023-04-03 12:24:25
  from 'C:\xampp\htdocs\smarty\PHP_Project_with_Bootstrap\Template\explanation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642aa959602fe2_83785001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '151a342f5a378501b4db0e92ac71f93eff38af93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\PHP_Project_with_Bootstrap\\Template\\explanation.tpl',
      1 => 1680517464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642aa959602fe2_83785001 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<div class='container mt-5'>
    <div id='displayQuestion'><b><?php echo $_smarty_tpl->tpl_vars['question_num']->value+1;?>
. <?php echo $_smarty_tpl->tpl_vars['question']->value;?>
</b></div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['answer']->value, 'answer_data', false, 'key');
$_smarty_tpl->tpl_vars['answer_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['answer_data']->value) {
$_smarty_tpl->tpl_vars['answer_data']->do_else = false;
?>
                <div class="form-check  mt-2">
                    <span class='mr-4'><b><?php echo chr((65+$_smarty_tpl->tpl_vars['key']->value));?>
</b></span>
                    <input type="radio" class="form-check-input first " name="myRadio" id="radio1">
                    <label for="radio1"
                        class="form-check-label answer_input <?php if ($_smarty_tpl->tpl_vars['answer_data']->value['is_correct']['is_correct']) {?>text-success font-weight-bold <?php }?>"
                        id='displayOption1'><?php echo $_smarty_tpl->tpl_vars['answer_data']->value['answer'];?>
</i></label>
                    </label>
                </div>  
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <div class='mt-5'><span><b>Explanation: </b></span><?php echo $_smarty_tpl->tpl_vars['explanation']->value;?>
</div> 
</div>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['response_ques']->value, 'ques_data', false, 'key');
$_smarty_tpl->tpl_vars['ques_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['ques_data']->value) {
$_smarty_tpl->tpl_vars['ques_data']->do_else = false;
?>
        <span class="ques_<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
">
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['key']->value+1;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('val', $_prefixVariable1);?>
          <?php if ((isset($_smarty_tpl->tpl_vars['user_ans']->value[$_smarty_tpl->tpl_vars['val']->value]))) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['answer_new']->value['answers'], 'answer_data', false, 'key');
$_smarty_tpl->tpl_vars['answer_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['answer_data']->value) {
$_smarty_tpl->tpl_vars['answer_data']->do_else = false;
?>
                <?php if (($_smarty_tpl->tpl_vars['answer_data']->value['is_correct'])) {?>
                    <?php ob_start();
echo chr((65+$_smarty_tpl->tpl_vars['key']->value));
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('correct', $_prefixVariable2);?>
                <?php }?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php if ($_smarty_tpl->tpl_vars['user_ans']->value[$_smarty_tpl->tpl_vars['val']->value] == $_smarty_tpl->tpl_vars['correct']->value) {?>
                <span class="alert alert-success">correct</span>
                <?php } else { ?>
                  <span class="alert alert-danger">Incorrect</span>
              <?php }?>
            <?php } else { ?>
            <span class="alert alert-warning">Unattempted</span>
          <?php }?>
        </span>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<div class="fixed-bottom bg-light rounded border py-2 ml-auto border border-secondary d-flex justify-content-center"
    style="z-index: 10; bottom:10px; width:15%">
    <a class="btn-danger btn mx-3 px-4 " id="home" href="result.php">Result Page</a>
</div>

<?php }
}
