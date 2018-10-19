<pre>
<?php
require_once 'Pessoa.php';
require_once 'Bolsista.php';
require_once 'Aluno.php';
require_once 'Visitante.php';
require_once 'Tecnico.php';
require_once 'Professor.php';


$v1 = new Visitante();
$v1->setNome("Rugal B.");
$v1->setIdade(33);
$v1->setSexo("MASC");
$a1 = new Aluno();
$a2 = new Aluno();
$a1->setMatri(1111);
$a1->setSexo("MASC");
$a1->setidade(35);
$a1->setNome("Robert");
$a1->setCurso("Informatica");
$a1->setMensal(1000);

$b1 = new Bolsista();
$b1->setMatri(2222);
$b1->setNome("King");
$b1->setCurso("Sistemas");
$b1->setIdade(25);
$b1->setSexo("FEM");
$b1->setBolsa(300);
$b1->setMensal(1000);

$t1 = new Tecnico();
$t1->setRegistroProf("12345");

$p1 = new Professor();
$p1->setSalario(3200);
$p1->receberAum(800);

$a2->setMensal(300);
// $b1->setMensal(1000);

print_r($a1);
print_r($b1);
print_r($t1);
print_r($p1);



?>
</pre>