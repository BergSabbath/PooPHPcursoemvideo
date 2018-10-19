<pre>
<?php
require_once 'video.php';
require_once 'AcoesVideo.php';
require_once 'Pessoa.php';
require_once 'Gafanhoto.php';

$v[0] = new Video("Aula 1 de POO");
$v[1] = new Video("Aula 12 de PHP");
$v[2] = new Video("Aula 15 de HTML5");

$g[0] = new Gafanhoto("Jubileu",22,"M","Juba");
$g[1] = new Gafanhoto("Creuza",18,"F","Creuzita");


print_r($v);
print_r($g);
?>
</pre>