<?php

require_once __DIR__.'/bootstrap.php';

$parameters = [
	users=>[
 ["name"=>"User1"],
 ["name"=>"User2"],
 ["name"=>"User3"],
 ["name"=>"User4"],
 ["name"=>"User5"],
 ["name"=>"User6"]
]
];

// Render our view
echo $twig->render('tag.html.twig', $parameters);
