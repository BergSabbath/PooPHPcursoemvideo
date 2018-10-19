<?php
require_once 'Pessoa.php';
//visitante pode ser instanciada, pois ela herda de Pessoa 
// e não é abstrata, e poir herdar de uma classe abstrata não a torna abstrata
//aki há uma herança de implementação. ou herança pobre
//não é adicionada nada.
class Visitante extends Pessoa{

}
?>