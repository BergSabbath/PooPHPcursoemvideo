<?php
//Herança
class Pessoa {//classe mãe/progenitora/superclasse
//atributos
    private $nome;
    private $idade;
    private $sexo;

//metodo construtor
    // public function __construct($n,$i,$s){
    //     $this->nome = $n;
    //     $this->idade = $i;
    //     $this->sexo = $s;
    // }
//metodos
    public function fazerAniver(){
        $this->idade ++;
    }
//metodos especiais
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function getSexo(){
        $this->sexo;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

}
?>