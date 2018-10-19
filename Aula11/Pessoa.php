<?php
//Classe Abstrata-
//não pode ser instanciada. so pode servir com progenitora
//não pode gerar objetos. nesse caso "$p1 = new Pessoa();"
//não poderá ser mais possivel.
abstract class Pessoa {
//atributos
    private $nome;
    private $idade;
    private $sexo;
//metodo final-
//Não pode ser sobrescrito pelas suas subclasses. Obrigatoriamente herdado    
    public final function fazerAniver(){
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