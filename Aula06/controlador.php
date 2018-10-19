<?php
// interface não tem atributos, apenas métodos
// dentro de uma interface, todos os métodos são definidos como publicos
interface Controlador{
    //métodos
    //não precisa declarar que é abstrato
    //pois so por estar dentro da interface ja é abstrato
    public function ligar();
    public function desligar();   
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();   
}   