<?php
$sql = "SELECT * FROM about";
$aboutp = $mysqli->query($sql);

$aboutp = convert($aboutp);