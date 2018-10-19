<?php
require_once 'Animal.php';
class Ave extends Animal{
//atributos
    private $corPena;

//metodos abstratos da class Animal tem que ser implementados obrigatoriamente
    public function locomover(){
        echo "<p>Voando</p>";
    }
    public function alimentar(){
        echo "<p>Comendo frutas</p>";
    }
    public function EmitirSom(){
        echo "<p>Som de Ave</p>";
    }
    public function fazerNinho(){
        echo "<p>Construiu um ninho</p>";
    }
//metodos especiais
    public function getCorPena(){
        return $this->corPena;
    }
    public function setPena($corPena){
        $this->corPena = $corPena;
    }

}
?>