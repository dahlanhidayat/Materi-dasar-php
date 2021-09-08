<?php

function foo()
{
    echo "foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$fungctionyangakandipanggil = "foo";
$fungctionyangakandipanggil();

$fungctionyangakandipanggil = "bar";
$fungctionyangakandipanggil();

function sayHello(string $name, $filter)
{
    $finalname = $filter($name);
    echo "Hello $finalname" . PHP_EOL;
}

function samplefunction(string $name) : string {
    return "sample $name";
}

sayHello("Eko", "samplefunction");
sayHello("Eko", "strtoupper");
sayHello("Eko", "strtolower");