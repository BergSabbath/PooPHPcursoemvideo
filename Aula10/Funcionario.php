<?php
require_once 'Pessoa.php';

class Funcionario extends Pessoa{//filha/subclasse
//atributos
    private $setor;
    private $trabalhando;
//metodos
    public function mudarTrabalho(){
    $this->trabalhando = !$this->trabalhando;
    }
//metodos especiais
    public function getSetor(){
        return $this->setor;
    }
    public function setSetor($setor){
        $this->setor = $setor;
    }
    public function getTrabalhando(){
        return $this->trabalhando;
    }
    public function setTrabalhando($trabalhando){
        $this->trabalhando = $trabalhando;
    }
}

?>