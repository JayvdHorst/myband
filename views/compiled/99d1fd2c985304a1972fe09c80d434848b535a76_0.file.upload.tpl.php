<?php
/* Smarty version 3.1.30, created on 2016-11-03 15:19:59
  from "C:\wamp64\www\myband\views\upload.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581b478fa57c76_81740969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99d1fd2c985304a1972fe09c80d434848b535a76' => 
    array (
      0 => 'C:\\wamp64\\www\\myband\\views\\upload.tpl',
      1 => 1478182796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581b478fa57c76_81740969 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">

    <div class="col-md-4 " style="text-align: center">
        <form action="model/upload.php" method="post" enctype="multipart/form-data" style="text-align: center">
            <h4 style="text-align: center; font-family: BarkerFont; color: black;">Edit/change <strong style="color: rgb(26, 159, 164);">Most Recent Video's</strong></h4>
            <input type="text" name="title" class="form-control input-sm" placeholder="Title Video"><br>
            <input type="text" name="content" class="form-control input-sm" placeholder="User"><br>
        </form>
    </div>
        <div class="col-md-4 " style="text-align: center">
            <form action="model/upload.php" method="post" enctype="multipart/form-data" style="text-align: center">
                <h4 style="text-align: center; font-family: BarkerFont; color: black;">Edit/change <strong style="color: rgb(26, 159, 164);">Most Recent Video's</strong></h4>
                <input type="text" name="title" class="form-control input-sm" placeholder="Title Video"><br>
                <input type="text" name="content" class="form-control input-sm" placeholder="User"><br>
                Select image to upload:
                <input style="width: auto; margin-left: auto; margin-right: auto" type="file" name="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
            </form>
        </div>
    <div class="col-md-4 " style="text-align: center">
        <form action="model/upload.php" method="post" enctype="multipart/form-data" style="text-align: center">
            <h4 style="text-align: center; font-family: BarkerFont; color: black;">Edit/change <strong style="color: rgb(26, 159, 164);">Most Recent Video's</strong></h4>
            <input type="text" name="title" class="form-control input-sm" placeholder="Title Video"><br>
            <input type="text" name="content" class="form-control input-sm" placeholder="User"><br>
        </form>
    </div>
</div><?php }
}
