<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';

// Display template: output html
$templateParser->display('head.tpl');
$templateParser->display('nav.tpl');
$templateParser->display('footer.tpl');