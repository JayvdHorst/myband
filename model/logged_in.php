<?php
echo "<h3 style=\"text-align: center; letter-spacing: 2px; font-family: BarkerFont; color: rgb(26, 159, 164);\">Hey welcome, " . $username . "</h3>" .  " <hr> ";

$templateParser->display('upload.tpl');

echo "<hr>";
echo "<h5 style=\"text-align: center;  font-family: BarkerFont; color: rgb(26, 159, 164);\">You can <a href='model/logout.php'>Logout</a> here.</h5>";


