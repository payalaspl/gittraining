<?php

require_once __DIR__.'/bootstrap.php';


$parameters = [
'profile' => 'Bob',
'image_data'=>'img10.jpg'
];

echo $twig->render('operators.html.twig', $parameters);

