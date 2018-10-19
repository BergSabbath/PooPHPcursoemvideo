<pre>
<?php
require_once 'Lutador.php';
require_once 'Luta.php';
$p = array();
$p[0] = new Lutador("Sie kensou","França",31,1.75,68.9,0,0,0);
$p[1] = new Lutador("Chris","Brasil",29,1.68,57.8,0,0,0);
$p[2] = new lutador("Kyo kusanagi","EUA",35,1.65,80.9,0,0,0);
$p[3] = new lutador("Iori Yagami","Australia",28,1.93,81.6,0,0,0);
$p[4] = new lutador("Rugal B.","Brasil",37,1.70,119.3,0,0,0);
$p[5] = new lutador("Orochi","EUA",30,1.81,105.7,0,0,0);

$u1 = new Luta();
$u1->marcarLuta($p[2],$p[3]);
$u1->lutar();
$p[2]->status();
$p[3]->status();
// $p[2]->status();
// $p[3]->status();
// $p[4]->status();
// $p[5]->status();
// $u1->lutar();
// $p[4]->status();
// $p[5]->status();
// $p[4]->apresentar();

// $p[0]->status();
// $p[1]->status();

// $p[0]->apresentar();
// $p[1]->apresentar();
// $p[2]->apresentar();
// $p[3]->apresentar();
// $p[4]->apresentar();
// $p[5]->apresentar();
// $p[0]->status();
// $p[1]->status();
// $p[2]->status();
// $p[3]->status();
// $p[4]->status();
// $p[5]->status();
// $p[0]->ganharLuta();
// $p[3]->perderLuta();
// $p[2]->empatarLuta();

// $p[1]->status();
// $p[3]->status();

//print_r($uec01);
// print_r($p[1]);
// print_r($p[2]);
// print_r($p[3]);
// print_r($p[4]);
// print_r($p[5]);
?>
</pre>