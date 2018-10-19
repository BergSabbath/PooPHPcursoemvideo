<pre>
    <?php
    require_once 'mamifero.php';
    require_once 'Lobo.php';
    require_once 'Cachorro.php';


    $l = new Lobo();
    $l->emitirSom();
    $c = new Cachorro();
    $c->emitirSom();
    $c->reagirDono(false);
    $c->reagirHora(19,54);
    $c->reagirFrase("Olá");
    // print_r($c)

    ?>
</pre>