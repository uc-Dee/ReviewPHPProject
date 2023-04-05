<?php
/* Smarty version 4.3.0, created on 2023-04-05 06:59:06
  from 'C:\xampp\htdocs\smarty\FinalPHPProject\template\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642d001aa0a4f3_80515821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40a1911713a4cb1748dd49d9c7202d6d4df4f3e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\FinalPHPProject\\template\\home.tpl',
      1 => 1680670533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642d001aa0a4f3_80515821 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
  <a class="btn btn-primary btn-lg" id="btn1" href="display.php" id='a1' type='button'>Start</a>
</div>

<?php echo '<script'; ?>
>
$(document).ready(function(){
    sessionStorage.clear()
})
<?php echo '</script'; ?>
><?php }
}
