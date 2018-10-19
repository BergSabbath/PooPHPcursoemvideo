<?php
require_once 'Pessoa.php';

//aki há uma herança para diferença
//vai acrescentar coisas
//herdar mais terá diferencas para a superClasse(Pessoa)

class Aluno extends Pessoa{//filha/subclasse... se colocar final.. essa classe não poderá ter filhas
//atributos
    private $matri;
    private $curso;
    private $mensal;
//metodo
//se não quiser que seja sobreposta pelo metodo da classe Bolsista..
//basta fazer public final pegarMensal().. dessa forma o pagarMensal() do bolsista nao funcionará,,dará erro
public function pagarMensal(){
    echo "<p> Pagando mensalidade para o aluno ".$this->getNome()."</p>";
    // $this->mensal = $men;
}
    
//metodos especiais
    public function getMatri(){
        return $this->matri;
    }
    public function setMatri($matri){
        $this->matri = $matri;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($curso){
        $this->curso = $curso;
    }
    public function getMensal(){
        return $this->mensal;
    }
    public function setMensal($mens){
        $this->mensal = $mens;
    }

    


}
?>