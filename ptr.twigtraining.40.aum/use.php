<?php

require_once __DIR__.'/bootstrap.php';

$parameters = [
'my_var' => 'Hello world !!!'
];

// Render our view
echo $twig->render('use.html.twig', $parameters);

