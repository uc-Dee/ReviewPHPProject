<?php
/* Smarty version 4.3.0, created on 2023-04-05 03:17:50
  from 'C:\xampp\htdocs\smarty\PHP_Project_with_Bootstrap\Template\result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642ccc3ecd0dd6_64773123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a7c714e1b3f660e4111c756e99fa1940d16614a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\PHP_Project_with_Bootstrap\\Template\\result.tpl',
      1 => 1680657469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642ccc3ecd0dd6_64773123 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="container">
    <div class="container d-flex justify-content-center mt-5 flex-column align-items-center">
      <div class="d-flex mb-3" style="width: 800px">
        <div class="d-flex flex-column align-items-center btn bg-opacity-25 border rounded w-50 mr-2" style="
              background-color: rgb(227, 227, 227) !important;
              border-color: rgb(186, 186, 186) !important;
            ">
          <p style="color: indigo"><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
%</p>
          <h6>Result</h6>
        </div>
        <div class="d-flex flex-column align-items-center btn border rounded w-50 ms-3 mr-2"
          style="border-color: rgb(95, 150, 191) !important">
          <p class="text-primary">11</p>
          <h6>Total item</h6>
        </div>
        <div class="d-flex flex-column align-items-center btn border rounded w-50 ms-3 mr-2"
          style="border-color: rgb(95, 150, 191) !important">
          <p class="text-success"><?php echo $_smarty_tpl->tpl_vars['total_correct']->value;?>
</p>
          <h6>Correct</h6>
        </div>
        <div class="d-flex flex-column align-items-center btn border rounded w-50 ms-3 mr-2"
          style="border-color: rgb(95, 150, 191) !important">
          <p class="text-danger"><?php echo $_smarty_tpl->tpl_vars['total_incorrect']->value;?>
</p>
          <h6>Incorrect</h6>
        </div>
        <div class="d-flex flex-column align-items-center btn border rounded w-50 ms-3 mr-2"
          style="border-color: rgb(95, 150, 191) !important">
          <p class="text-warning unuttempted_ques"><?php echo $_smarty_tpl->tpl_vars['unattempted']->value;?>
</p>
          <h6>Unattempted</h6>
        </div>
      </div>

                  <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Question</th>
            <th scope="col">Option</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['response_ques']->value, 'ques_data', false, 'key');
$_smarty_tpl->tpl_vars['ques_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['ques_data']->value) {
$_smarty_tpl->tpl_vars['ques_data']->do_else = false;
?>
          <tr>
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</th>
            <td>
              <a href="http://localhost/smarty/PHP_Project_with_Bootstrap/Template/explanation.php?que=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="w-100 text-decoration-none text-dark"><?php echo $_smarty_tpl->tpl_vars['ques_data']->value['snippet'];?>
</a>
            </td>
            <td class="d-flex">
            <?php $_smarty_tpl->_assignInScope('answer', json_decode($_smarty_tpl->tpl_vars['ques_data']->value['content_text']));?>
            <?php $_smarty_tpl->_assignInScope('answer_new', json_decode(json_encode($_smarty_tpl->tpl_vars['answer']->value),true));?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['answer_new']->value['answers'], 'answer_data', false, 'key');
$_smarty_tpl->tpl_vars['answer_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['answer_data']->value) {
$_smarty_tpl->tpl_vars['answer_data']->do_else = false;
?>
                <p class="border <?php if ($_smarty_tpl->tpl_vars['answer_data']->value['is_correct']) {?>bg-primary text-white<?php }?> d-flex justify-content-center align-items-center ms-2  rounded"
                  style="width: 24px; height: 24px">
                  <?php echo chr((65+$_smarty_tpl->tpl_vars['key']->value));?>

                </p>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              
            </td>
            <td>
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
                      <span class="badge badge-success">correct</span>
                      <?php } else { ?>
                        <span class="badge badge-danger">Incorrect</span>
                    <?php }?>

                  <?php } else { ?>
                  <span class="badge badge-warning">Unattempted</span>
                <?php }?>

              </span>
            </td>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>
    </div>
  </div>
<?php echo '<script'; ?>
>
$(document).ready(function(){
  let attempted_data = JSON.parse(sessionStorage['attempted_ques']);
  attempted_data = [...new Set(attempted_data)]
  $('.unuttempted_ques').text(11-attempted_data.length);
})
<?php echo '</script'; ?>
><?php }
}
