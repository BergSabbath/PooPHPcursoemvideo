<?php

require_once 'Pessoa1.php';
require_once 'Publicacao1.php';

class Livro implements Publicacao{
//atributos
    private $livro;
    private $autor;
    private $totPag;
    private $pagAtual;
    private $aberto;
    private $leitor;

//metodo construtor

    public function __construct($livro,$autor,$totPag,$leitor){
        $this->livro = $livro;
        $this->autor = $autor;
        $this->totPag = $totPag;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }
//metodos 
    Public function detalhes(){
        echo "O livro ".$this->livro." escrito por ".$this->autor." possui ".$this->totPag." paginas. ".$this->leitor->getNome()." está na página ".$this->pagAtual;
        echo "<hr>";
    }

//metodos especiais
    public function getLivro(){
        return $this->livro;
    }
    public function setLivro($livro){
        $this->livro = $livro;
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
        $this->totPag = $totPag;
    }
    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
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
        echo "o livro está aberto";
        echo "<hr>";
    }
    public function fechar(){
        $this->aberto = false;
        echo "O livro está fechado";
        echo "<hr>";
    }
    public function folhear($p){
        if ($p >$this->totPag){
            $this->pagAtual = 0;
        }else{
            $this->pagAtual = $p;
        }
    }
    public function avancarPag(){
        if ($this->pagAtual < $this->totPag){
            $this->pagAtual ++;
        }else{
            echo "Você está na ultima pagina";
            echo "<hr>";
        }
    }
    public function voltarPag(){
        if ($this->pagAtual > 0){
            $this->pagAtual --;
        }else{
            echo "Você está na primeira pagina";
            echo "<hr>";
        }
    }
}
?>