<?php /* Smarty version Smarty-3.1.18, created on 2016-10-05 12:38:55
         compiled from "views\newsacrticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:721857f4f45fceb961-79582372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '229cc058585a2d6ff5dd54a380eefb9abe36c3aa' => 
    array (
      0 => 'views\\newsacrticles.tpl',
      1 => 1475668012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '721857f4f45fceb961-79582372',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f4f45fd690d3_00504642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4f45fd690d3_00504642')) {function content_57f4f45fd690d3_00504642($_smarty_tpl) {?>&lt;?php
    echo '<section>';

    //fetch_assoc should not be in the view!
    foreach($result as $row=>$oneItem)
    {

    echo '<article>';
        echo '<h1>'.$oneItem['title'].'</h1>';
        echo '<content>'.$oneItem['content'].'</content>';
        echo '<img src=img/'.$oneItem['image'].'>';
        echo '</article>';
    }

    echo '</section>';
<?php }} ?>
