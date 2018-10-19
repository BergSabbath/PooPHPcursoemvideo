<?php
require_once 'Pessoa.php';

class Professor extends Pessoa{//filha/subclasse
//atributos
    private $especi;
    private $salario;
//metodos
    public function receberAum($aum){
        $this->salario += $aum;
    }
//metodos especiais
    public function getEspeci(){
        return $this->especi;
    }
    public function setEspeci($especi){
        $this->especi = $especi;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setSalario($salario){
        $this->salario = $salario;
    }
}

?>