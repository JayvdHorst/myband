<?php

$result = $mysqli->query("SELECT * FROM newsarticles");

$result = convert($result);