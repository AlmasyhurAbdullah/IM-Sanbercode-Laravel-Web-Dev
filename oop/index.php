<?php

require("frog.php");
require("ape.php");

$sheep = new Animal("shaun");

echo "Name: ".$sheep->name."<br>"; // "shaun"
echo "Legs: ".$sheep->legs."<br>"; // 4
echo "Cold Blooded: ".$sheep->cold_blooded."<br>"; // "no"

echo "<br>";

$kodok = new Frog("buduk");
echo "Name: ".$kodok->name."<br>"; 
echo "Legs: ".$kodok->legs."<br>";
echo "Cold Blooded: ".$kodok->cold_blooded."<br>";
echo "".$kodok->jump()."<br>";

echo "<br>";

$ape = new Ape("kera sakti");
echo "Name: ".$ape->name."<br>"; 
echo "Legs: ".$ape->legs."<br>";
echo "Cold Blooded: ".$ape->cold_blooded."<br>";
echo "".$ape->yell()."<br>";


?>