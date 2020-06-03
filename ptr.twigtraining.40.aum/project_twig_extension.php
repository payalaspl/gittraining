<?php

class Project_Twig_Extension extends \Twig\Extension\AbstractExtension
{
    public function getFunctions()
    {
        return [

             new \Twig\TwigFunction('lipsum', 'strtoupper'),
        ];
    }
    public function getFilters()
    {
        return [
            new \Twig\TwigFilter('rot13', 'str_rot13'),
        ];
    }

}

?>
