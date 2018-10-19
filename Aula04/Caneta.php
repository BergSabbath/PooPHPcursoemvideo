<?php
class Caneta{

    public $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    // public function __construct(){//ou pode ser escrito com o mesmo nome da classe
    //     //public function Caneta()
    //     $this->cor = "Azul";
    //     $this->tampar();//ja chama o metodo tampar no contruct
    //}

    public function Caneta($m, $c, $p){
// nesse caso pode chamar os atributos diretamente porque está dentro da classe
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();

    
    }
    public function tampar(){
        $this->tampada = true;
    }

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta = $p;
    }
    

}

?>