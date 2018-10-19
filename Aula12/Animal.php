<?php
//lembrando que classes abstratas nao podem ser instanciadas
abstract class Animal{
//atributos
    protected $peso;
    protected $idade;
    protected $membros;

//metodos abstratos não possuem codificações
    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();

//metodos especiais
    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($peso){
        $this->peso = $peso;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function getMembros(){
        return $this->membros;
    }
    public function setMembros($membros){
        $this->membros = $membros;
    }






}
?>