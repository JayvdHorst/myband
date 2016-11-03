<?php
/* Smarty version 3.1.30, created on 2016-11-03 13:31:35
  from "C:\wamp64\www\myband\views\newsarticles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581b2e279e8313_11665339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ae32eb4dbe6b79d2fa4edda226cb57751d06071' => 
    array (
      0 => 'C:\\wamp64\\www\\myband\\views\\newsarticles.tpl',
      1 => 1478176292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581b2e279e8313_11665339 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp64\\www\\myband\\libs\\plugins\\modifier.date_format.php';
?>
 <hr><h1 style="text-align: center; letter-spacing: 5px; font-family: BarkerFont; color: rgb(26, 159, 164);">Most Recent Video's</h1>
 <div class="row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'oneItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->value) {
?>
        <div class="col-xs-4" style="text-align: center; height: 250px;">
        <img src="img/image_recents/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
">
            <div class="caption">
                <p style="color: grey; font-family: BarkerFont; font-size: 14px;"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</p>
                <p style="color: lightgray; font-family: BarkerFont; font-size: 12px;"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</p>
                <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%e %B %Y");?>
</p>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

 </div>
<div aria-label="Page navigation" class="paginationcss">
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
</div>
 <hr><?php }
}
