<?php

// Load our autoloader
require_once __DIR__.'/vendor/autoload.php';
require_once 'project_twig_extension.php';
use Twig\Extra\Markdown\MarkdownExtension;// ]Specify our Twig templates location
use Twig\Extra\Markdown\MarkdownRuntime;
use Twig\Extra\Markdown\DefaultMarkdown;

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
$twig->addExtension(new Project_Twig_Extension());
$twig->addExtension(new MarkdownExtension());
use Twig\RuntimeLoader\RuntimeLoaderInterface;

$twig->addRuntimeLoader(new class implements RuntimeLoaderInterface {
    public function load($class) {
        if (MarkdownRuntime::class === $class) {
            return new MarkdownRuntime(new DefaultMarkdown());
        }
    }
});
?>
