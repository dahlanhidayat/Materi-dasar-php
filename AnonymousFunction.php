<?php

$sayHello = function(string $name)
{
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Eko");
$sayHello("dahlan");

function sayGoodBy(string $name, $filter)
{
    $finalname = $filter($name);
    echo "Good bye $finalname" . PHP_EOL;
}

sayGoodBy("dahlan", function (string $name) : string {
    return strtoupper($name);
});

$firstname = "dahlan";
$lastname = "hidayat";

$fullname = function () use ($firstname, $lastname){
    echo "hai $firstname $lastname" . PHP_EOL;
};

$fullname();