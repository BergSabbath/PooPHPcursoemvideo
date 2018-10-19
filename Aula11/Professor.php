<?php
//atributos
class Professor extends Pessoa{
    private $especialidade;
    private $salario;

//metodos
    public function receberAum($aum){
        $this->salario += $aum;
    }
//metodos especiais
    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function setEspecialidade(){
        $this->especialidade = $especialidade;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setSalario($salario){
        $this->salario = $salario;
    }
}
?>