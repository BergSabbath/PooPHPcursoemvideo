<?php
require_once 'Lobo.php';
class Cachorro extends Lobo{

    public function emitirSom(){
        echo "<p>Latindo!!!</p>";
    }
    public function reagirFrase($frase){
        if ($frase == "Toma comida" || $frase == "Olá"){
            echo "<p>Abanar o rabo e latir</p>";
        }else{
            echo "<p>Rosnar</p>";
        }
    }
    public function reagirHora($hora,$min){
        if ($hora < 12){
            echo "<p>Abanar</p>";
        }else if ($hora >=18){
            echo "<p>ignorar</p>";
        }else{
            echo "<p>abanar o rabo e latir</p>";
        }
        
    }
    public function reagirDono($dono){
            if ($dono){
                echo "Abanar";
            }else{
                echo "Rosnar";
            }
    }
}