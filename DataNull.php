<?php

$name = "Dahlan";
$name = null; //apabila null -nya dihilangkan maka nilainya akan muncul

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "dahlan";
unset($contoh);
echo $contoh;
echo "\n";


