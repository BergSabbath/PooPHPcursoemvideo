<?php
require_once "Animal.php";
class Reptil extends Animal{
//atribtos
    private $corEscama;

//metodos abstratos da class Animal tem que ser implementados obrigatoriamente
    public function locomover(){
        echo "<p>Rastejando</p>";
    }
    public function alimentar(){
        echo "<p>Comendo vegetais</p>";
    }
    public function EmitirSom(){
        echo "<p>Som de réptil</p>";
    }

//metodos especiais
    public function getCorEscama(){
        return $this->corEscama;
    }
    public function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }




}

?>