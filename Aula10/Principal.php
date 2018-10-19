<pre>
<?php
require_once 'Pessoa.php';//quando carregar ALuno, professor ou funcionario, ja carrega automaticamente a classe Pessoa
require_once 'Professor.php';
require_once 'Funcionario.php';
require_once 'Aluno.php';

//programa principal
$p1 = new Pessoa();
$p2 = new Aluno();
$p3 = new Professor();
$p4 = new Funcionario();

$p1->setNome("Ryu");
$p2->setNome("Ken");
$p3->setNome("Guile");
$p4->setNome("Chun li");

$p2->setCurso("Informatica");
$p3->setEspeci("tecnologias");
$p3->setSalario(2000.00);
$p3->receberAum(500.00);
$p4->setSetor("Estoque");
$p1->setIdade(35);
$p4->setSexo("Fem");
$p3->setSexo("Masc");
$p4->mudarTrabalho();
$p4->mudarTrabalho();
$p2->cancelarMatri();
$p3->receberAum(90);
print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);

?>
</pre>
