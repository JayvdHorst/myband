<?php
/* Smarty version 3.1.30, created on 2016-10-31 15:12:22
  from "C:\wamp64\www\myband\views\newsarticles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581751462d80a7_03138015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ae32eb4dbe6b79d2fa4edda226cb57751d06071' => 
    array (
      0 => 'C:\\wamp64\\www\\myband\\views\\newsarticles.tpl',
      1 => 1477923086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581751462d80a7_03138015 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\wamp64\\www\\myband\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp64\\www\\myband\\libs\\plugins\\modifier.date_format.php';
?>
<section>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'oneItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->value) {
?>
        <h3><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h3>
        <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],30);?>
</p>
        <img src="img/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
">
        <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%e %B %Y");?>
</p>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</section>
<nav aria-label="Page navigation" class="paginationcss">
        <ul class="pagination">
                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['total_number_articles']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['total_number_articles']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                <li><a href="?action=home&page_nr=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
                        <?php }
}
?>

        </ul>
</nav><?php }
}
