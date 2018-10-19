<?php

require_once "Futebol.php";

$b = new Futebol;

$b->bola = "Colorida";
$b->estadio = "San siro";
$b->jogador = "Seedorf";

echo "<br>";

$b->Paises();
echo "<br>";
print_r($b);
?>