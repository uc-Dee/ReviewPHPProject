<?php
/* Smarty version 4.3.0, created on 2023-03-14 08:14:00
  from 'C:\xampp\htdocs\smarty\PHP_Project_with_Bootstrap\Template\result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64101eb86c76c5_03432801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '540903e626f91d2a6fb4f57f22741149955ea47c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\PHP_Project_with_Bootstrap\\Template\\result.tpl',
      1 => 1678778038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64101eb86c76c5_03432801 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Result | uCertify</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" />
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="css/result_page.css" />
</head>

<body>
  <nav class="navbar navbar-light bg-light" id="nav1">
    <img src="img/uCertifyLogo.png" class="d-inline-block align-top" alt="uCertify Logo"
      id="img1" />
    <p id="p1"><b>uCertify Test Prep</b></p>
  </nav>
  <hr id="hr1" />

  <div class="container">
    <div class="container d-flex justify-content-center mt-4 flex-column align-items-center">
      <div class="d-flex mb-3" style="width: 800px">
        <div class="d-flex flex-column align-items-center btn bg-opacity-25 border rounded w-50 mr-2" style="
              background-color: rgb(227, 227, 227) !important;
              border-color: rgb(186, 186, 186) !important;
            ">
          <p style="color: indigo">0 %</p>
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
          <p class="text-warning">11</p>
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
          <tr>
            <th scope="row">1</th>
            <td>
              <a href="#" class="w-100 text-decoration-none text-dark">There are four sections of the HR Impact Model.
                ...
                considered to be the most client-oriented role?</a>
            </td>
            <td class="d-flex">
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                A
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                B
              </p>
              <p class="bg-success border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                C
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                D
              </p>
            </td>
            <td><span>Unattempted</span></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>
              <a href="#" class="w-100 text-decoration-none text-dark">You work as a Network Administrator for
                McRobert...ng
                commands will you use to accomplish the task?</a>
            </td>
            <td class="d-flex">
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                A
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                B
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                C
              </p>
              <p class="bg-success border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                D
              </p>
            </td>
            <td><span>Unattempted</span></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>
              <a href="#" class="w-100 text-decoration-none text-dark">You are an administrator of SQL Server 2000
                comp...t to the
                database. Why does the connection fail?</a>
            </td>
            <td class="d-flex">
              <p class="bg-success border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                A
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                B
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                C
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                D
              </p>
            </td>
            <td><span>Unattempted</span></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>
              <a href="#" class="w-100 text-decoration-none text-dark">There are seven stages of internal consulting
                th... one of
                the seven stages of internal consulting?</a>
            </td>
            <td class="d-flex">
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                A
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                B
              </p>
              <p class="bg-success border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                C
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                D
              </p>
            </td>
            <td><span>Unattempted</span></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>
              <a href="#" class="w-100 text-decoration-none text-dark">You have some selected images in Adobe Bridge
                wh...d commands
                will you use to accomplish this task?</a>
            </td>
            <td class="d-flex">
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                A
              </p>
              <p class="bg-success border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                B
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                C
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                D
              </p>
            </td>
            <td><span>Unattempted</span></td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>
              <a href="#" class="w-100 text-decoration-none text-dark">Which of the following tools in the Camera Raw
                t...r dust or
                other unwanted elements from an image?</a>
            </td>
            <td class="d-flex">
              <p class="bg-success border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                A
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                B
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                C
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                D
              </p>
            </td>
            <td><span>Unattempted</span></td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>
              <a href="#" class="w-100 text-decoration-none text-dark">Which of the following blending modes is
                availab...end color
                only to transparent pixels of a layer?</a>
            </td>
            <td class="d-flex">
              <p class="bg-success border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                A
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                B
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                C
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                D
              </p>
            </td>
            <td><span>Unattempted</span></td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>
              <a href="#" class="w-100 text-decoration-none text-dark">You are creating a new site. You are using a
                Uni...g actions
                will you take to resolve this problem?</a>
            </td>
            <td class="d-flex">
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                A
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                B
              </p>
              <p class="bg-success border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                C
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                D
              </p>
            </td>
            <td><span>Unattempted</span></td>
          </tr>
          <tr>
            <th scope="row">9</th>
            <td>
              <a href="#" class="w-100 text-decoration-none text-dark">Your organization is likely to be purchased by
                a..., and
                employees. What is environmental scanning?</a>
            </td>
            <td class="d-flex">
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                A
              </p>
              <p class="bg-success border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                B
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                C
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                D
              </p>
            </td>
            <td><span>Unattempted</span></td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td>
              <a href="#" class="w-100 text-decoration-none text-dark">Organizational functions, according to Fayol,
                co...organizational functions for strategic planning?</a>
            </td>
            <td class="d-flex">
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                A
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                B
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                C
              </p>
              <p class="bg-success border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                D
              </p>
            </td>
            <td><span>Unattempted</span></td>
          </tr>
          <tr>
            <th scope="row">11</th>
            <td>
              <a href="#" class="w-100 text-decoration-none text-dark">Your organization is implementing the balanced
                s... four
                perspectives of the balanced score method?</a>
            </td>
            <td class="d-flex">
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                A
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                B
              </p>
              <p class="bg-success border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                C
              </p>
              <p class="border d-flex justify-content-center align-items-center ms-2 text-dark rounded"
                style="width: 24px; height: 24px">
                D
              </p>
            </td>
            <td><span>Unattempted</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html><?php }
}
