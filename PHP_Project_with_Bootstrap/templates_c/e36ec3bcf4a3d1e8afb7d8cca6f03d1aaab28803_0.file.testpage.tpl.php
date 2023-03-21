<?php
/* Smarty version 4.3.0, created on 2023-03-14 11:11:41
  from 'C:\xampp\htdocs\smarty\PHP_Project_with_Bootstrap\Template\testpage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6410485dc804e6_66087525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e36ec3bcf4a3d1e8afb7d8cca6f03d1aaab28803' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\PHP_Project_with_Bootstrap\\Template\\testpage.tpl',
      1 => 1678788698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6410485dc804e6_66087525 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test_Page | uCertify</title>

    <link rel="stylesheet" href="../css/test_page.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>

</head>

<body>
    <nav class="navbar navbar-light bg-light" id="nav1">
        <img src="img/uCertifyLogo.png" width="30" height="30" class="d-inline-block align-top" alt="uCertify Logo"
            id='img1'>
        <p id="p1"><b>uCertify Test Prep</b></p>
    </nav>

        <div class="container mt-3" id="question">
                <?php echo $_smarty_tpl->tpl_vars['HTML']->value;?>

    </div>

        <footer class=" fixed-bottom mb-2 ">
            <div class=" d-flex justify-content-end container mr-2">
                <button class="btn" id="timer"></button>
                <button type="button"
                    class="  btn btn-md-3 btn-outline-primary px-4 slide-toggle me-2 mr-2">List</button>
                <button type="button" class=" btn btn-md-3 btn-outline-dark  px-3 me-2" id="prev">Previous</button>
                <button class="btn " id="page"></button>
                <button type="button" class=" btn btn-md-3 btn-outline-dark px-4 me-2 mr-2 next_ques" id="next">Next</button>
                <button type="button" class="end-test btn btn-md-3 btn-danger px-3 me-2" data-bs-toggle="modal"
                    data-bs-target="#myModal" onclick="">End Test
                </button>
            </div>
        </footer>
    </div>
</body>
<?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
let question_no = 0;
    $(document).ready(function(){
        $(".next_ques").on('click',function () {
            question_no = question_no + 1;
            $.ajax({
                url:"display.php",
                type:"POST",
                data:{
                    question_no: question_no,
                    func : "get_ques_no"
                },
                success:(result)=> {
                    $('#question').html(result)
                }
            })
        })
    })
<?php echo '</script'; ?>
>

</html><?php }
}
