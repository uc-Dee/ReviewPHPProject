<?php
/* Smarty version 4.3.0, created on 2023-03-21 06:11:32
  from 'C:\xampp\htdocs\smarty\PHP_Project_with_Bootstrap\Template\result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64193c848435a8_47451378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a7c714e1b3f660e4111c756e99fa1940d16614a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\PHP_Project_with_Bootstrap\\Template\\result.tpl',
      1 => 1679375489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64193c848435a8_47451378 (Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="container">
    <div class="container d-flex justify-content-center mt-4 flex-column align-items-center">
      <div class="d-flex mb-3" style="width: 800px">
        <div class="d-flex flex-column align-items-center btn bg-opacity-25 border rounded w-50 mr-2" style="
              background-color: rgb(227, 227, 227) !important;
              border-color: rgb(186, 186, 186) !important;
            ">
          <p style="color: indigo">0%</p>
          <h6>Result</h6>
        </div>
        <div class="d-flex flex-column align-items-center btn border rounded w-50 ms-3 mr-2"
          style="border-color: rgb(95, 150, 191) !important">
          <p class="text-primary">11</p>
          <h6>Total item</h6>
        </div>
        <div class="d-flex flex-column align-items-center btn border rounded w-50 ms-3 mr-2"
          style="border-color: rgb(95, 150, 191) !important">
          <p class="text-success">0</p>
          <h6>Correct</h6>
        </div>
        <div class="d-flex flex-column align-items-center btn border rounded w-50 ms-3 mr-2"
          style="border-color: rgb(95, 150, 191) !important">
          <p class="text-danger">0</p>
          <h6>Incorrect</h6>
        </div>
        <div class="d-flex flex-column align-items-center btn border rounded w-50 ms-3 mr-2"
          style="border-color: rgb(95, 150, 191) !important">
          <p class="text-warning unuttempted_ques">11</p>
          <h6>Unattempted</h6>
        </div>
      </div>

            <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Question</th>
            <th scope="col">Option</th>
            <th scope="col">Result</th>
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
              <a href="#" class="w-100 text-decoration-none text-dark"><?php echo $_smarty_tpl->tpl_vars['ques_data']->value['snippet'];?>
</a>
            </td>
            <td class="d-flex">
            <?php $_smarty_tpl->_assignInScope('anser', json_decode(json_encode($_smarty_tpl->tpl_vars['ques_data']->value['content_text']),true));?>
            <?php echo print_r($_smarty_tpl->tpl_vars['anser']->value);?>

              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['anser']->value['answers'], 'answer_data', false, 'key');
$_smarty_tpl->tpl_vars['answer_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['answer_data']->value) {
$_smarty_tpl->tpl_vars['answer_data']->do_else = false;
?>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                <?php echo chr((65+$_smarty_tpl->tpl_vars['key']->value));?>

              </p>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              
            </td>
            <td><span>Unattempted</span></td>
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
>
<?php }
}
