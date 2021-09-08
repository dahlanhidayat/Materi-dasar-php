<?php

$values = array(1, 2, 3, 4);
var_dump($values);

$name = ["dahlan", "Hidayat", "Tuloh"];
var_dump($name);

var_dump($name[1]);

$name[0] = "Afwa";
var_dump ($name);

unset($name[0]);
var_dump($name);

$name[] = "Dahlan";
var_dump ($name);

var_dump(count($name));



$Dahlan = array(
  "id" =>  "dahlan",
   "name" => "hidayat",
    "age" => 30,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]

);
var_dump($Dahlan);

var_dump($Dahlan["name"]);

var_dump($Dahlan["address"][country]);

$afwa = array (
    "id" => "afwa",
    "name" => "afwa sayidah sidik",
    "age" => 35
    );

    var_dump($afwa);

