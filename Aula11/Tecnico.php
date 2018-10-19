<?php

require_once 'Aluno.php';
class Tecnico extends Aluno{
//Atributos
private $registroProf;
//metodos
    public function Praticar(){
    echo "Estou desempenhando o meu trabalho";  
    }

//metodos especiais

    public function getRegistroProf(){
        return $this->registroProf;
    }
    public function setRegistroProf($registroProf){
        $this->registroProf = $registroProf;
    }
}
?>