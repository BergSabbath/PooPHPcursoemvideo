<?php
class Caneta{

    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar(){
        if ($this->tampada == false){
            echo "Eu posso rabiscar";
        }else {
            echo "Não posso rabiscar";
        }
    }
    Private function tampar(){
        $this->tampada = true;
    }
    Private function destampar(){
        $this->tampada = false;
    }
    
}

?>