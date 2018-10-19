<?php
class Futebol{

    public $jogador;
    public $bola;
    public $time;
    public $estadio;

    public function Local(){
        $this->estadio = "Maracanã";
        $this->time = "Botafogo";
        $this->jogador = "Garrincha";
        $this->bola ="Dourada";
    }
    public function Paises(){

        echo "Brasil, Argentina, Uruguai";

    }



}

?>