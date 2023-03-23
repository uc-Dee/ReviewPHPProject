<?php

// In this header file we are trying to display the web page and its content
error_reporting(E_ERROR | E_PARSE);
// assigns the path of the parent of the parent directory of the current dir to the variable $DIR
$DIR = dirname(dirname(__DIR__));
require $DIR.'/libs/Smarty.class.php';
$smarty = new Smarty;  

function __ucd($a, $isDie = 1, $isPre = 1){
    if ($isPre) {
        echo '<pre>';
    print_r($a);
}
die();
}
function web_showpage($content, $themepage = 'index.tpl') {
    global $smarty;
    $smarty->assign( 'content', $content );
    // It will fetch the data of the themepage 
    displaycontent( $smarty->fetch( $themepage ), false );
    exit;
}
function displaycontent( $content, $isExit = 1 ) {
    if ( $isExit ) {
        echo $content; //phpcs:ignore
        exit;
    } else {
        echo $content; //phpcs:ignore
    }
}

