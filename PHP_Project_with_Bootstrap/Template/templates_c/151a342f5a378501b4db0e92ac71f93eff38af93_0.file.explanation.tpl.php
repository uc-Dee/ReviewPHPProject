<?php
/* Smarty version 4.3.0, created on 2023-03-23 18:34:33
  from 'C:\xampp\htdocs\smarty\PHP_Project_with_Bootstrap\Template\explanation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641c8da9dadd79_73462452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '151a342f5a378501b4db0e92ac71f93eff38af93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\PHP_Project_with_Bootstrap\\Template\\explanation.tpl',
      1 => 1679564693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641c8da9dadd79_73462452 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<div class='container mt-5'>
    <div id='displayQuestion'><b><?php echo $_smarty_tpl->tpl_vars['question_num']->value+1;?>
. <?php echo $_smarty_tpl->tpl_vars['question']->value;?>
</b></div>
    <div>
        <div class="form-check py-2 mt-2">
        <b><?php echo chr((65));?>
</b>
            <input type="radio" class="form-check-input first " name="myRadio" id="radio1">
            <label for="radio1"
                class="form-check-label answer_input <?php if ($_smarty_tpl->tpl_vars['answer']->value[0]['is_correct']['is_correct']) {?>text-success font-weight-bold <?php }?>"
                id='displayOption1'><?php echo $_smarty_tpl->tpl_vars['option1']->value;?>
</i></label>
            </label>
        </div>
        <div class="form-check py-2">
        <?php echo chr((66));?>

            <input type="radio" class="form-check-input second" name="myRadio" id="radio2">
            <label for="radio2"
                class="form-check-label answer_input <?php if ($_smarty_tpl->tpl_vars['answer']->value[1]['is_correct']['is_correct']) {?>text-success font-weight-bold<?php }?>"
                id='displayOption2'><?php echo $_smarty_tpl->tpl_vars['option2']->value;?>
</label>
            </label>
        </div>
        <div class="form-check py-2">
        <?php echo chr((67));?>

            <input type="radio" class="form-check-input third" name="myRadio" id="radio3">
            <label for="radio3"
                class="form-check-label answer_input <?php if ($_smarty_tpl->tpl_vars['answer']->value[2]['is_correct']['is_correct']) {?>text-success font-weight-bold <?php }?>"
                id='displayOption3'><?php echo $_smarty_tpl->tpl_vars['option3']->value;?>
</label>
            </label>
        </div>
        <div class="form-check py-2">
        <?php echo chr((68));?>

            <input type="radio" class="form-check-input forth" name="myRadio" id="radio4">
            <label for="radio4"
                class="form-check-label answer_input <?php if ($_smarty_tpl->tpl_vars['answer']->value[3]['is_correct']['is_correct']) {?>text-success font-weight-bold <?php }?>"
                id='displayOption4'><?php echo $_smarty_tpl->tpl_vars['option4']->value;?>
</label>
            </label>
        </div>

        <div class="form-check py-2 pt-5 mt-2">
            <hr>
            <p class="form-check-label answer_input" id='displayOption4'><?php echo $_smarty_tpl->tpl_vars['explanation']->value;?>
</p>
        </div>
    </div>
</div>

<div class="fixed-bottom bg-light rounded border py-2 ml-auto border border-secondary d-flex justify-content-center"
    style="z-index: 10; bottom:10px; width:15%">
    <a class="btn-danger btn mx-3 px-4 " id="home" href="result.php">Result Page</a>
</div><?php }
}
