<?php
echo "<pre>";
require_once "Caneta.php";

//$c1 = new Caneta;
$c1 = new Caneta("Bic", "Azul", 1.5);
$c2 = new Caneta("Compact", "Vermelha", 0.7);

// $c1->getModelo();
//$c1->modelo = "Nic";// aki pode modificar direto pq é public

//print_r($c1);

print_r($c1);
echo "<br>";
print_r($c2);
echo "</pre>";
?>