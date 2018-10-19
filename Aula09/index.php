<pre>
<?php
require_once 'Pessoa.php';
require_once 'Livro.php';

$p = array();
$p[0]= new Pessoa("Pedro", 22, "Masc");
$p[1]= new Pessoa("Maria", 31, "Fem");

$l[0]= new Livro ("PHP Básico", "José da Silva", 300, $p[0]);
$l[1]= new Livro ("POO com PHP", "Maria de Souza", 500, $p[0]);
$l[2]= new Livro ("PHP avançado", "Ana Paula", 200, $p[1]);

$l[0]->abrir();
$l[0]->folhear(70);
// $l[0]->avancarPag();
// $l[0]->avancarPag();
// $l[0]->voltarPag();
// $l[0]->voltarPag();
$l[0]->detalhes();
$l[2]->folhear(90);
$l[2]->detalhes();
$l[1]->detalhes();


echo "<br><br>";
print_r($l[0]);
?>
</pre>