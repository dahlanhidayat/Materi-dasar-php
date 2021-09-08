<?php

$names = ["afwa" , "sayidah", "sidik"];

for ($i = 0; $i < count($name); $i++) {
    echo "Data ke $i = $name[$i]" .PHP_EOL;
}

foreach ($names as $name){
    echo "Data $name" . PHP_EOL;
}

$person = [
    "first_name" => "afwa",
    "middle_name" => "sayidah",
    "last_name" => "sidik"
];

foreach ($person as $key => $value){
    echo "$key : $value" . PHP_EOL;
}




