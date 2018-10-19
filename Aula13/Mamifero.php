<?php
require_once 'Animal.php';
class Mamifero extends Animal{
    //atributos
    protected $corPelo;

    public function emitirSom(){
        echo "<p>Som de mamífero</p>";
    }
}