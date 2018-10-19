<?php
class Luta{
//atributos
private $desafiado;
private $desafiante;
private $rounds;
private $aprovada;

//metodos

    public function marcarLuta($l1,$l2){
        if (($l1->getCategoria() === $l2->getCategoria()) && 
        ($l1 <> $l2)){
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
            echo "A Luta foi aprovada!!<br><br>";
            echo "{$this->desafiado->getNome()} x {$this->desafiante->getNome()}";
        }else{
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
            echo "A luta não foi autorizada!";
        }
    }
    public function lutar(){
        if ($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            echo "<hr>";
            $vencedor = rand(0,2);
            switch ($vencedor){
                case 0:
                    echo "<p>A luta empatou</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo "<p>O lutador ".$this->desafiado->getNome()." venceu</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<p>O lutador ".$this->desafiante->getNome()." venceu</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        }else{
            echo "<p>A luta não pode acontecer!</p>";
        }
    }   
//metodos especiais

    public function getDesafiado(){
        return $this->desafiado;
}
    public function setDesafiado($ado){
        $this->desafiado = $ado;

    }
    public function getDesafiante(){
        return $this->desafiante;
    }
    public function setDesafiante($ante){
        $this->desafiante = $ante;
    }
    public function getRounds(){
        return $this->rounds;
    }
    public function setRounds($rou){
        return $this->rounds = $rou;
    }
    public function getAprovada(){
        return $this->aprovada;
    }
    public function setAprovada($ap){
        return $this->aprovada = $ap;
    }

}


?>