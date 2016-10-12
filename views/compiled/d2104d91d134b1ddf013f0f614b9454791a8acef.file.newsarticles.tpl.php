<?php /* Smarty version Smarty-3.1.18, created on 2016-10-05 13:24:32
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2803557f4f6a9e26001-04442453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1475673868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2803557f4f6a9e26001-04442453',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f4f6a9f3bc94_86623906',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4f6a9f3bc94_86623906')) {function content_57f4f6a9f3bc94_86623906($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp64\\www\\myband\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp64\\www\\myband\\libs\\plugins\\modifier.date_format.php';
?>
    

    
    
    

    
        
        
        
        
    

    

<section>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
        <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
        <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],30);?>
</p>
        <img src="img/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
">
        <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%e %B %Y");?>
</p>
    <?php } ?>
</section><?php }} ?>
