<?php
/* Smarty version 4.3.0, created on 2023-03-13 09:57:33
  from 'C:\xampp\htdocs\smarty\PHP_Project_with_Bootstrap\Template\testpage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_640ee57d33eb26_19583786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e36ec3bcf4a3d1e8afb7d8cca6f03d1aaab28803' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\PHP_Project_with_Bootstrap\\Template\\testpage.tpl',
      1 => 1678697779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640ee57d33eb26_19583786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1439888477640ee57d308e28_80726404';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="./css/style.css">
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
    <nav class="navbar border border-dark navbar-light bg-light" id="nav1">
        <img src="./img/uCertifyLogo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <p id="p1" class="text-center"><b>uCertify Test Prep</b></p>
        </a>

    </nav>

    <div class="container mt-3" id="question">
        <p><b>Q1: </b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero eum inventore culpa quisquam ducimus dolorem
            cum repellendus quis necessitatibus expedita velit dignissimos nulla quia numquam doloribus reiciendis
            consequatur architecto, magnam sequi voluptas! Dolores consectetur nostrum error velit quibusdam iste ipsa
            excepturi nihil, maxime laudantium ratione saepe cupiditate obcaecati esse tempore.</p>

            <input type="radio" id="option1" name="options" value="option1">
            <label for="option1">Radio</label><br>
            
            <input type="radio" id="option2" name="options" value="option2">
            <label for="option2">Radio</label><br>
            
            <input type="radio" id="option3" name="options" value="option3">
            <label for="option3">Radio</label><br>

            <input type="radio" id="option3" name="options" value="option3">
            <label for="option3">Radio</label><br>

            
            <nav class="navbar navbar-light bg-light" id="nav2">
                <form class="form-inline" id="form1">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </nav>
                <!-- <nav class="navbar navbar-light bg-light">
                    <form class="form-inline">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      <button id="previous">Previous</button>
                <button id="next">Next</button>
                <button id="list">List</button>
                <button id="end-test">End Test</button> 
                </form>
                
                <p>Current Time: <span id="timestamp"></span></p>
                  
            </nav> -->

    </div>

</body>
</html><?php }
}
