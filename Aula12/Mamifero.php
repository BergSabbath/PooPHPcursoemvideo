<?php 
require_once 'Animal.php';
class Mamifero extends Animal{
//atributos
private $corPelo;
//metodos abstratos da class Animal tem que ser implementados obrigatoriamente
    public function locomover(){
        echo "<p>Correndo</p>";
    }
    public function alimentar(){
        echo "<p>Mamando</p>";
    }
    public function emitirSom (){
        echo "<p>Som de mamífero</p>";
    }
//metodos especiais
    public function getCorPelo(){
        return $this->corPelo;
    }
    public function setCorPelo($corPelo){
        $this->corPelo = $corPelo;
    }








}
?>