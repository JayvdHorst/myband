<?php
/* Smarty version 3.1.30, created on 2016-10-31 14:34:13
  from "C:\wamp64\www\myband\views\about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5817485501f5f0_29764105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '655c249b6a4667e2b53e43dd1ba8221392e586aa' => 
    array (
      0 => 'C:\\wamp64\\www\\myband\\views\\about.tpl',
      1 => 1477919350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5817485501f5f0_29764105 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row pull-right">
    <div class="col-sm-6 col-md-12" style="max-width: 300px;max-height: 300px">
        <div class="thumbnail">
            <section>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'oneItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->value) {
?>
                    <img src="img/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
">
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </section>
            <div class="caption">
            </div>
        </div>
    </div>
</div><?php }
}
