<?php
require_once 'Pessoa.php';

class Aluno extends Pessoa{//filha/subclasse
//atributos
    private $matri;
    private $curso;
//metodo
public function cancelarMatri(){
    echo "<p>Matricula será cancelada </p>";
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

    


}
?>