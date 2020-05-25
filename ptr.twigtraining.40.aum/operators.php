<?php

require_once __DIR__.'/bootstrap.php';


$parameters = [
'profile' => 'Bob'
];

echo $twig->render('operators.html.twig', $parameters);

