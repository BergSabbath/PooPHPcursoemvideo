<pre>
<?php
require_once 'Pessoa1.php';
require_once 'Livro1.php';
require_once 'Publicacao1.php';

    $l = array();
    $l[0] = new Pessoa("Julianne",31,"Fem");
    $l[1] = new Pessoa("Rose", 37,"Fem");
    $l[2] = new Pessoa("Edna", 63,"Fem");
    
    $p = array();
    $p[0] = new Livro("Java","Ludenberg",500,$l[0]);
    $p[1] = new Livro("Python","Luciano",600, $l[1]);
    $p[2] = new Livro("PHP", "Bianka",300,$l[2]);
    
    $p[2]->folhear(700);
    // $p[0]->avancarPag();
    // $p[0]->avancarPag();
    $p[2]->voltarPag();

    
    // print_r($l[0]);
    // print_r($l[1]);
    // print_r($l[2]);
    print_r($p[2]);
    // print_r($p[1]);
    // print_r($p[2]);

?>
</pre>