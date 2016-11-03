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

        include('model/select_widgets.php');
        include('model/select_newsarticles.php');
        include('model/get_nr_newsacrticles.php');

        $templateParser->assign('widgets', $widgets);
        $templateParser->assign('result', $result);
        $templateParser->assign('total_number_articles', $total_number_articles);

        $templateParser->display('newsarticles.tpl');
        break;

    case 'about':

        include('model/select_about.php');

        $templateParser->assign('aboutp', $aboutp);

        $templateParser->display('about.tpl');

        break;

    case 'games':

        include('model/show.php');

        $templateParser->display('games.tpl');

        break;

    case 'schedule':

        $templateParser->display('schedule.tpl');

        break;

    case 'contact';

        $templateParser->display('contact.tpl');

        break;

    case 'admin';

        include('model/login.php');
        if (isset($_SESSION['username'])){
            $username = $_SESSION['username'];
            include('model/logged_in.php');
        }else{
            if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php }
            $templateParser->display('login.tpl');

            }
}

$templateParser->display('footer.tpl');