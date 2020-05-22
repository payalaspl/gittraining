<?php

require_once __DIR__.'/bootstrap.php';


$parameters = [


];

// Render our view
echo $twig->render('filter.html.twig', $parameters);
