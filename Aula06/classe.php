<?php
require_once 'controlador.php';
class ControleRemoto implements Controlador{
private $volume;
private $ligado;
private $tocando;
//metodos especiais
    public function __construct(){
        // $this->setVolume(50);
        // $this->setLigado(false);
        // $this->setTocando(false);
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    private function getVolume(){
        return $this->volume;
    }
    private function setVolume($v){
        $this->volume = $v;
    }
    private function getLigado(){
        return $this->ligado;
    }
    private function setLigado($i){
        $this->ligado = $i;
    }
    private function getTocando(){
        return $this->tocando;
    }
    private function setTocando($t){
        $this->tocando = $t;
    }
    //metodos abstratos
    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);    
    }
    public function abrirMenu(){
        echo "<br>Está ligado?:" .($this->getLigado()?"SIM":"NÃO");
        echo "<br>Está tocando?:" .($this->getTocando()?"SIM":"NÂO");
        echo "<br>Volume: ". $this->getVolume(). "&nbsp;";
        for ($a=0 ;$a<=$this->getVolume();$a+=10){
            echo "|";
        }
        echo "<br>";   
    }
    public function fecharMenu(){
        echo "fechando o menu!";
    }
    public function maisVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }else{
            echo "A TV está desligada";
        }
    }
    public function menosVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        }else{
            echo"A tv está desligada";
        }
    }
    public function ligarMudo(){
        if ($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }        
    }
    public function desligarMudo(){
        if ($this->getLigado() && $this->getVolume()==0){
            $this->setVolume(50);
        }
    }
    public function play(){
        if ($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
            echo "Assistir filme";
        }
    }
    public function pause(){
        if ($this->getLigado() && ($this->getTocando())){
            $this->setTocando(false);
            echo "O filme está pausado";
        }
    }
}