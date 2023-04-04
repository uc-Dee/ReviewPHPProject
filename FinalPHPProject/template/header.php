<?php

error_reporting(E_ERROR | E_PARSE);
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
    displaycontent( $smarty->fetch( $themepage ), false );
    exit;
}
function displaycontent( $content, $isExit = 1 ) {
    if ( $isExit ) {
        echo $content; 
        exit;
    } else {
        echo $content; 
    }
}

