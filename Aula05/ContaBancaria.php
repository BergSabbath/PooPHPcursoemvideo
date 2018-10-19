<?php
class ContaBanco{
    
    private $numConta;
    private $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC"){
            $this->setSaldo(50);
        }else{
            $this->setSaldo(150);
        }

    }
    public function fecharConta(){
        if ($this->getSaldo() > 0) {
            echo "<p>Conta com dinheiro, não pode fechar</p>";
        }else if ($this->getSaldo() < 0){
            echo "a conta está abaixo de 0";
        }else{
            $this->setStatus(false);
            echo "<p>conta de {$this->getDono()} fechada!</p>";
        }

    }
    public function depositar($v){
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
            //$this->saldo = $this->saldo + $v; opção 2
            echo "<p>Deposito de R$ $v na conta de {$this->getDono()}</p>";
        }else {
            echo "<p> Conta fechada. Não consigo depositar</p>";
        }
    }
    public function sacar($v){
    if ($this->getStatus()){
        if ($this->getSaldo() >= $v){
            //$this->saldo = $this->saldo - $v; opção 2
            $this->setSaldo($this->getSaldo()-$v);
            echo "<p> saque de R$ $v autorizado na conta de {$this->getDono()} </p>";
        }else{
            echo "<p>Você não tem saldo sufuciente para sacar</p>";
        }
    }else{
        echo "Não posso sacar de uma conta fechada";
    }

    }
    public function pagarMensal(){
        if ($this->getTipo()=="CC"){
            $v = 12;
        }else if ($this->getTipo() == "CP"){
            $v = 20;
        }
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$ $v debitada na conta de ".$this->getDono()."</p>";
        }else {
            echo "<p> Problemas com a conta, não posso cobrar";
        }
            
        

    }
    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!!</p>";

    }



    public function getnumConta(){
        return $this->numConta;
    }
    public function setnumConta($a){
        $this->numConta = $a;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }
    public function getDono(){
        return $this->dono;
    }
    public function setDono($c){
        $this->dono = $c;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($d){
        $this->saldo = $d;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($s){
        $this->status = $s;

    }


}
?>