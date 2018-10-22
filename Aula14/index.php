<pre>
<?php
require_once 'video.php';
require_once 'AcoesVideo.php';
require_once 'Pessoa.php';
require_once 'Gafanhoto.php';
require_once 'Visualizacao.php';

$v[0] = new Video("Aula 1 de POO");
$v[1] = new Video("Aula 12 de PHP");
$v[2] = new Video("Aula 15 de HTML5");

$g[0] = new Gafanhoto("Jubileu",22,"M","Juba");
$g[1] = new Gafanhoto("Creuza",18,"F","Creuzita");

$vis[0] = new Visualizacao($g[0],$v[2]);//jubileu assiste html5
$vis[1] = new Visualizacao($g[0],$v[1]);//jubileu assiste PHP

$vis[0]->avaliar();
$vis[1]->avaliarPorc(85);
// print_r($v);
// print_r($g);
print_r($vis);
?>
</pre>