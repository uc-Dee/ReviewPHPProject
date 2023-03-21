<?php
/* Smarty version 4.3.0, created on 2023-03-21 05:44:59
  from 'C:\xampp\htdocs\smarty\PHP_Project_with_Bootstrap\Template\testpage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6419364b40e182_15868476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd8237c0b3858c9d8356a5228ff69b38fb1116c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\PHP_Project_with_Bootstrap\\Template\\testpage.tpl',
      1 => 1679373884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6419364b40e182_15868476 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<style>
    .menu-button {
        background-color: #5661B3;
        color: #E6E8FF;
    }

    .menu-button:hover {
        color: #E6E8FF;
        background-color: #6574CD;
    }

    .local-navbar {
        /* background-color: #191E38; */
        border-radius: 0 .25rem .25rem 0;
        display: flex;
        flex-direction: column;
        padding-left: 2rem;
        padding-right: 2rem;
        padding-top: 1.5rem;
        position: absolute;
        left: -350px;
        transition: all .24s ease-in;
        width: 250px;
        position: absolute;
        z-index: 99;
        top: 0;
        height: 90vh;
    }

    .show {
        left: 0;
    }

    .close-icon {
        line-height: 0;
        position: absolute;
        top: 0;
        right: 0;
    }

    .close-icon i {
        color: #B2B7FF;
        font-size: 2rem;
    }

    .close-icon i:hover {
        color: #E6E8FF;
    }
</style>

<div class="container mt-3" id="question">
    <?php echo $_smarty_tpl->tpl_vars['HTML']->value;?>

</div>
<div id="local-navbar" class="local-navbar card card-body bg-light p-2"
        style="position:absolute;top:97px;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_ques']->value, 'ques_info', false, 'key');
$_smarty_tpl->tpl_vars['ques_info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['ques_info']->value) {
$_smarty_tpl->tpl_vars['ques_info']->do_else = false;
?>
        <h6 onclick="changeToQues('<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
')" class="py-1"><i class="fa-solid fa-circle-notch"><b><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
.</b><?php echo $_smarty_tpl->tpl_vars['ques_info']->value['snippet'];?>

        </h6>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" id='myModal' role='dialog'>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">End Test</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                Do you want to end the test?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Cancel</button>
                <a type="button" href="result.php" class="btn btn-danger">End Test</a>
            </div>
        </div>
    </div>
</div>

<footer class="fixed-bottom mb-2">
    <div class=" d-flex justify-content-end container mr-2">
        <button class="countdown bg-transparent border-0 font-weight-bold" style="margin-right:10px"
            id='timer'></button>
        <button type="button" class="  btn btn-md-3 btn-outline-primary px-4 slide-toggle me-2 mr-2"
            id='list'>List</button>
        <button type="button" <?php if ($_smarty_tpl->tpl_vars['disable_pre']->value) {?>disabled <?php }?> class="btn btn-md-3 btn-outline-dark pre_btn px-3 me-2"
            id="prev">Previous</button>
        <div>
            <span class="no_of_que">1</span>of<span>11</span>
        </div>
        <button class="btn " id="page"></button>
        <button type="button" class=" btn btn-md-3 btn-outline-dark px-4 me-2 mr-2" id="next">Next</button>
        <button type="button" class="end-test btn btn-md-3 btn-danger px-3 me-2" data-toggle="modal"
            data-target=".bd-example-modal-lg" onclick="">End Test
        </button>
    </div>
</footer>

</div>

<?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
let attempted_ques = [];
function fetchQuestion(question_no) {
            $.ajax({
                url: "display.php",
                type: "POST",
                data: {
                    question_no: question_no,
                    func: "get_ques_no"
                },
                success: (result) => {
                    $('#question').html(result)
                }
            })
        }
function changeToQues (ques_no) {
    fetchQuestion(ques_no);
    checkedAns(ques_no)
}
/* Fetching the answers from the session storage */
function checkedAns(question_no) {
    setTimeout(()=>{
        const fectch_ans = sessionStorage;
        const ans = fectch_ans[question_no]
        let node = $('input[value="' + ans + '"]');
        node.prop('checked',true)
    },100)
}
// ---------------------------------------------->JavaScript<--------------------------------------------------------
/* This will fetch the questions */
function getQueAns (event) {
    let ques = event.target.getAttribute('que')
    let ans = event.target.defaultValue
    sessionStorage.setItem(ques,ans);
    attempted_ques.push(ques);
    sessionStorage.setItem('attempted_ques',JSON.stringify(attempted_ques))
}

    let question_no = 0;
    // it means we are writting jquery
    $(document).ready(function() {
       checkedAns(question_no+1)

// ---------------------------------------------->JavaScript<--------------------------------------------------------
        $("#prev").on('click', function() {
            question_no = question_no - 1;
            console.log(question_no)
            $('.no_of_que').text(question_no+1)
            if (question_no<10) {
                $('#next').attr('disabled',false);
            } 
            if(question_no == 0) {
                $('#prev').attr('disabled',true);
            }
            fetchQuestion(question_no);
            checkedAns(question_no+1)
        });

        $("#next").on('click', function() {
            question_no = question_no + 1;
            console.log(question_no+1)
            $('.no_of_que').text(question_no+1)
            if(question_no>0){
                $('#prev').attr('disabled',false);
            }

            if(question_no == 10) {
                $('#next').attr('disabled',true);
            }

            fetchQuestion(question_no);
            checkedAns(question_no+1)
        });

        $('#list').click(function() {
            console.log('YESS');
            $('#local-navbar').toggleClass('show');
        });

    })

/* Timer code */
    var timer2 = "5:00";
    var interval = setInterval(function() {


        var timer = timer2.split(':');
        //by parsing integer, I avoid all extra string processing
        var minutes = parseInt(timer[0], 10);
        var seconds = parseInt(timer[1], 10);
        --seconds;
        minutes = (seconds < 0) ? --minutes : minutes;
        if (minutes < 0) clearInterval(interval);
        seconds = (seconds < 0) ? 59 : seconds;
        seconds = (seconds < 10) ? '0' + seconds : seconds;
        //minutes = (minutes < 10) ?  minutes : minutes;
        $('.countdown').html(minutes + ':' + seconds);
        timer2 = minutes + ':' + seconds;
    }, 1000);

<?php echo '</script'; ?>
>
<?php }
}
