<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
//atributos
private $titulo;
private $autor;
private $totPag;
private $pagAtual;
private $aberto;
private $leitor;

//metodo contrutor
public function __construct($titulo, $autor, $totPag, $leitor){
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->totPag = $totPag;
    $this->aberto = false;
    $this->pagAtual = 0;
    $this->leitor = $leitor;
}

//metodos
    public function detalhes(){
        echo "<hr>";
        echo "Livro ".$this->titulo." escrito por ".$this->autor."<br>";
        echo "Paginas: ".$this->totPag. " atual ".$this->pagAtual."<br>";
        echo "Sendo lido por ".$this->leitor->getNome()."<br>";
    }
//metodos especiais

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($autor){
        $this->autor = $autor;
    }
    public function getTotPag(){
        return $this->totPag;
    }
    public function setTotPag($totPag){
        $this->totpag = $totPag;
    }
    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }
    public function getAberto(){
        return $this->aberto;
    }
    public function setAberto($aberto){
        $this->aberto = $aberto;
    }
    public function getLeitor(){
        return $this->leitor;
    }
    public function setLeitor($leitor){
        $this->leitor = $leitor;
    }
//metodos implementados da interface Publicacao

    public function abrir(){
        $this->aberto = true;
    }
    public function fechar(){
        $this->aberto = false;
    }
    public function folhear($p){
        if ($p > $this->totPag){
            $this->pagAtual = 0;
        }else{
            $this->pagAtual = $p;
        }
    }
    public function avancarPag(){
        if($this->pagAtual < $this->totPag){
        $this->pagAtual ++;
        }else{
            echo "<p>Você já está na última página</p>";
        }

    }
    public function voltarPag(){
        if($this->pagAtual > 0){
            $this->pagAtual --;
        }else{
            echo "<p>Você já está na primeira página</p>";
        }
    }

}
?>