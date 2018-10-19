<?php
require_once 'Aluno.php';
//bolsista vai ter tudo que Aluno e consequentemente o que Pessoa tem
class Bolsista extends Aluno{
    //atributos
    private $bolsa;
    private $mensal;
//metodos
    public function RenovarBolsa(){
        echo "<p>Bolsa Renovada!</p>";
    }
    //sobrepoe o metodo pagarMensal() do Aluno
    public function pagarMensal(){
        $f = $this->mensal - $this->bolsa ; 
        echo "<p>Pagando mensalidade $f com desconto do(a) bolsista ".$this->getNome()." </p>";
    }

    public function getBolsa(){
        return $this->bolsa;
    }
    public function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }
    public function getMensal(){
        return $this->mensal;
    }
    public function setMensal($men){
        $this->mensal = $men - $this->bolsa; 
    }

}
?>