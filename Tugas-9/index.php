<?php

require_once('Animal.php');
require_once('Frog.php');
require_once('Ape.php');

$sheep = new Animal("Shaun");
echo "Name: " . $sheep->name . "<br>"; // "shaun"
echo "Legs: " . $sheep->legs . "<br>"; // 4
echo "Cold blooded: " . $sheep->cold_blooded . "<br><br>"; // "no"

$kodok = new Frog("Buduk");
echo "Name: " . $kodok->name . "<br>"; // sungokong
echo "Legs: " . $kodok->legs . "<br>"; // 2
echo "Cold blooded: " . $kodok->cold_blooded . "<br>"; // "no"
echo "Jump: " . $kodok->jump() . "<br><br>"; // "hop hop"

$sungokong = new Ape("Kera Sakti");
echo "Name: " . $sungokong->name . "<br>"; // sungokong
echo "Legs: " . $sungokong->legs . "<br>"; // 2
echo "Cold blooded: " . $sungokong->cold_blooded . "<br>"; // "no"
echo "Yell: " . $sungokong->yell() . "<br><br>"; // "Auooo"