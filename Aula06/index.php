<pre>
<?php
echo "<h1>Projeto Controle Remoto</h1>";
require_once 'classe.php';
$tv = new ControleRemoto();
// $tv->ligar();
$tv->desligar();
$tv->play();
// $tv->pause();
// $tv->maisVolume();
$tv->menosVolume();
$tv->abrirMenu();
// $tv->fecharMenu();
//print_r($tv);
//$tv->getVolume();/// não se pode chamar direto, pois os metodos são
// privados

?>
</pre>