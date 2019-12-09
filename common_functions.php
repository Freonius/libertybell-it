<?php
function ends_with($haystack, $needle) {
    $length = strlen($needle);
    return $length === 0 || (substr($haystack, -$length) === $needle);
}

function get_clean_pagename($p) {
    $p = trim(strtolower($p));
    if (ends_with($p, "/") && strlen($p) > 0) {
        $p = substr($p, 0, -1);
    }
    
    $p = str_replace("/", "_", $p);
    
    if (strlen($p) == 0) {
        $p = "default";
    }
    return $p;
}

function page_exists($p, $array) {
    if (!array_key_exists($p, $array)) {
        $p = "404";
    }
    return $p;
}