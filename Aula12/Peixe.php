<?php
require_once 'Animal.php';
class Peixe extends Animal{
//atributos
    private $corEscama;

//metodos abstratos da class Animal tem que ser implementados obrigatoriamente
    public function locomover(){
        echo "<p>Nadando</p>";
    }
    public function alimentar(){
        echo "<p>Comendo substancias</p>";
    }
    public function emitirSom (){
        echo "<p>Não faz som</p>";
    }
    public function soltarBolhas(){
        echo "<p>Soltar uma bolha</p>";
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