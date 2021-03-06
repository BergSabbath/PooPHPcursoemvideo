<?php
abstract Class Pessoa{
//atributos 
    protected $nome, $idade, $sexo, $experiencia;
//metodo construtor
    public function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }

//metodos
    protected function ganharExp(){
        $this->experiencia ++;
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
        return $this->sexo;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
    public function getExperiencia(){
        return $this->experiencia;
    }
    public function setExperiencia($experiencia){
        $this->experiencia = $experiencia;
    }
    
}