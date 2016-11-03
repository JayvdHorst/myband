<?php

$sql2 = "SELECT * FROM widgets";
$widgets = $mysqli->query($sql2);

$widgets = convert($widgets);