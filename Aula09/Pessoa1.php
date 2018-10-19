<?php
require_once 'Livro1.php';
require_once 'Publicacao1.php';

class Pessoa{
    //atributos
    private $nome;
    private $idade;
    private $sexo;
//metodo construtor
    public function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
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
        return $this->idade;
    }
    public function setSexo($idade){
        $this->sexo = $sexo;
    }


}

?>