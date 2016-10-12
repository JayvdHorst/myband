<?php

function convert($DBResult) {

    $resultsArray = array();
    while ($row = $DBResult->fetch_assoc()) {
        $resultsArray[] = $row;
    }
    return $resultsArray;
}