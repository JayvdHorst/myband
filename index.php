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

// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Me First And The Gimme Gimmes');
$templateParser->assign('footertekst', 'This FOOTER is to easy');

// Display template: output html
$templateParser->display('head.tpl');
$templateParser->display('header.tpl');

$action=isset($_GET['action'])?$_GET['action']:'home';

switch($action) {
    case 'home':

        include('model/select_newsarticles.php');
        $templateParser->assign('result', $result);
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