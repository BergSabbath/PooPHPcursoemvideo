<pre>
<?php
require_once 'Reptil.php';
require_once 'Peixe.php';
require_once 'Ave.php';
require_once 'Arara.php';
require_once 'Canguru.php';
require_once 'Goldfish.php';
require_once 'Tartaruga.php';
require_once 'Cachorro.php';
require_once 'Cobra.php';
$m = new Mamifero();
$a = new Ave();
$r = new Reptil();
$c = new Cachorro();
$cg = new Canguru();
$p = new Peixe();
$co = new Cobra();
$t = new tartaruga();
$ar = new Arara();


$t->locomover();
$c->locomover();
$ar->locomover();


$m->emitirSom();
// $a = new Ave();
// $r = new Reptil();
$c->emitirSom();
// $cg = new Canguru();
// $p = new Peixe();
// $co = new Cobra();

print_r($t);
print_r($c);
print_r($co);
print_r($m);
print_r($c);

?>
</pre>