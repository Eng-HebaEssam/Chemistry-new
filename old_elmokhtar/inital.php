<?php
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
    include 'connect.php';
    $sessionUser = '';
    if (isset($_SESSION['user'])) {
        $sessionUser = $_SESSION['user'];
    }
    //routes
    $tpl  = 'includes/templates/'; 
    $func = 'includes/functions/'; 
    $css  = 'layouts/css/';
    $js   = 'layouts/js/'; 
    $js   = 'layouts/img/'; 
    include $func . 'function.php';
    include $tpl .'links.php';
