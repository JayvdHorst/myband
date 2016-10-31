<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';

include 'includes/functs.php';

// Display template
$templateParser->display('head.tpl');
$templateParser->display('header.tpl');

$action=isset($_GET['action'])?$_GET['action']:'home';

switch($action) {
    case 'home':

        $page_nr = isset($_GET['page_nr'])?$_GET['page_nr']:1;
        include('model/select_newsarticles.php');
        include('model/get_nr_newsacrticles.php');
        $templateParser->assign('result', $result);
        $templateParser->assign('total_number_articles', $total_number_articles);
        $templateParser->display('newsarticles.tpl');
        break;

    case 'about':

        $templateParser->display('about.tpl');
        break;

    case 'games':

        break;

    case 'schedule':

        break;

    case 'contact';

}

$templateParser->display('footer.tpl');