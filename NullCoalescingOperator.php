<?php

$data = [
    "action" => "Create"
];

if (isset($data["action"])){
    $action = $data["action"];
} else {
    $action = "Nothing" ;
}

echo $action . PHP_EOL;


$data = [];

if (isset($data["action"])){
    $action = $data["action"];
} else {
    $action = "Nothing" ;
}

echo $action . PHP_EOL;


$data = [];
$action = $data['action'] ?? "Nothing";

echo $action . PHP_EOL;
