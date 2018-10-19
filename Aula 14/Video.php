<?php
require_once 'AcoesVideo.php';

class Video implements AcoesVideo{
//atributos
    private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;

//metodos construtor
    public function __construct($titulo){
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

//metodos implementados
    public function play(){
        $this->reproduzindo = true;
        $this->views ++;
    }
    public function pause(){
        $this->reproduzindo = false;
    }
    public function like(){
        $this->curtidas ++;
    }
//metodos especiais
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function getAvaliacao(){
        return $this->avaliacao;
    }
    public function setAvaliacao($avaliacao){
        $this->avaliacao;
    }
    public function getViews(){
        return $this->views;
    }
    public function setViews($views){
        $this->views = $views;
    }
    public function getCurtidas(){
        return $this->curtidas;
    }
    public function setCurtidas($curtidas){
        $this->curtidas = $curtidas;
    }
    public function getReproduzindo(){
        return $this->reproduzindo;
    }
    public function setReproduzindo($reproduzindo){
        $this->reproduzindo = $reproduzindo;
    }

}