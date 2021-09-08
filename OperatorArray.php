<?php

$first = [
    "first_name" => "dahlan"
];

$last = [
    "last_name" => "hidayat"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "dahlan",
    "last_name" => "hidayat"
];

$b =[
    "last_name" => "hidayat",
    "first_name" => "dahlan"
];

var_dump($a == $b);
var_dump($a === $b);

