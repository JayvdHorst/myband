<?php
/* Smarty version 3.1.30, created on 2016-11-03 20:11:48
  from "C:\wamp64\www\myband\views\about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581b8bf4b3f1e6_40209098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '655c249b6a4667e2b53e43dd1ba8221392e586aa' => 
    array (
      0 => 'C:\\wamp64\\www\\myband\\views\\about.tpl',
      1 => 1478200304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581b8bf4b3f1e6_40209098 (Smarty_Internal_Template $_smarty_tpl) {
?>
<hr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['aboutp']->value, 'oneItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->value) {
?>
    <div class="" style="text-align: center;">
        <img src="img/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['images'];?>
">
        <div class="">
            <p style="color: darkgrey; font-family: BarkerFont; font-size: 16px;"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</p>
            <p style="color: gray; font-family: BarkerFont; font-size: 12px;"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</p>
        </div>
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<hr><?php }
}
