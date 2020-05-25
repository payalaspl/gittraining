<?php

require_once __DIR__.'/bootstrap.php';


$parameters = [


];
$filter = new \Twig\TwigFilter('rot13', function ($string) {
    return str_rot13($string);
});
// Render our view
echo $twig->render('test.html.twig', $parameters);

