<?php

require_once('twig-init.php');




echo $twig->render('index.html', [
    'name' => 'John Doe', 
    'occupation' => 'gardener',
    ]);