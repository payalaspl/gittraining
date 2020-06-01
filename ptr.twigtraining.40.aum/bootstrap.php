<?php

// Load our autoloader
require_once __DIR__.'/vendor/autoload.php';
require_once 'project_twig_extension.php';
use Twig\Extra\Intl\IntlExtension;
use Twig\Extra\Html\HtmlExtension;
use Twig\Extra\CssInliner\CssInlinerExtension;

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');

$filter = new \Twig\TwigFilter('rot13filter', function ($string) {
    return str_rot13($string);
});


$function = new \Twig\TwigFunction('uppertext', function ($string) {
    return strtoupper($string);
});


// Instantiate our Twig
$twig = new \Twig\Environment($loader);
$twig->addFilter($filter);
$twig->addFunction($function);
$twig->addExtension(new IntlExtension());
$twig->addExtension(new HtmlExtension());
$twig->addExtension(new CssInlinerExtension());
$twig->addExtension(new Project_Twig_Extension());
?>
