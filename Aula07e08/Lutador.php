<?php
/*abstração - extrair eh considerar somente o que importa no exercicio 
ou classe*/
class Lutador{
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
//metodo construtor
    public function __construct($nom,$nac,$id,$alt,$pes,$vit,$der,$emp){
        $this->nome = $nom;
        $this->nacionalidade = $nac;
        $this->idade = $id;
        $this->altura = $alt;
        // $this->peso = $pes;
        $this->vitorias = $vit;
        $this->derrotas =$der;
        $this->empates = $emp;
        // $this->setNome($nom);
        // $this->setNacionalidade($nac);
        // $this->setIdade($id);
        // $this->setAltura($alt);
        $this->setPeso($pes);
        // $this->setVitorias($vit);
        // $this->setDerrotas($der);
        // $this->setEmpates($emp);
    }
//metodos especiais
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nom){
        $this->nome = $nom;
    }
    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    public function setNacionalidade($nac){
        $this->nacionalidade = $nac;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($id){
        $this->idade = $id;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($alt){
        $this->altura = $alt;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($pes){
        $this->peso = $pes;
        $this->setCategoria();
    }                
    public function getCategoria(){
        return $this->categoria;
    }
    private function setCategoria(){
        if ($this->peso < 52.2){
            $this->categoria = "Inválido";
        }else if($this->peso <= 70.3){
            $this->categoria = "Peso leve";
        }else if ($this->peso <= 83.9){
            $this->categoria = "Medio";
        }else if($this->peso <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválido";
        }
    }
    public function getVitorias(){
        return $this->vitorias;
    }
    public function setVitorias($vit){
        $this->vitorias = $vit;
    }
    public function getDerrotas(){
        return $this->derrotas;
    }
    public function setDerrotas($der){
        $this->derrotas = $der;
    }
    public function getEmpates(){
        return $this->empates;
    }
    public function setEmpates($emp){
        $this->empates = $emp;
    }
//métodos principais 
    public function apresentar(){
        echo "<p><hr></p>";
        echo "<p>Nome: {$this->getNome()}</p>";      
        echo "<p>País: {$this->getNacionalidade()}</p>";
        echo "<p>Idade: {$this->getIdade()}</p>";
        echo "<p>Altura: {$this->getAltura()}</p>";
        echo "<p>Peso: {$this->getPeso()}</p>";
        echo "<p>Categoria: {$this->getCategoria()}</p>";
        echo "<p>Vitorias: {$this->getVitorias()}</p>";
        echo "<p>Derrotas: {$this->getDerrotas()}</p>";
        echo "<p>Empates: {$this->getEmpates()}</p>";

    }
    public function status(){
        echo "<p><hr></p>";
        echo "<p>".$this->getNome(). " é da categoria ".
        $this->getCategoria().", possui ".$this->getvitorias()." vitórias, ".
        $this->getDerrotas()." derrotas e ".$this->getEmpates()." empates</p>";
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias()+1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);
    }
}
?>