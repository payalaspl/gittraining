<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite14979788a613cb64254a5beada1a6c0
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '6a47392539ca2329373e0d33e1dba053' => __DIR__ . '/..' . '/symfony/polyfill-intl-icu/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\Extra\\Markdown\\' => 20,
            'Twig\\Extra\\Intl\\' => 16,
            'Twig\\Extra\\CssInliner\\' => 22,
            'Twig\\' => 5,
            'TijsVerkoyen\\CssToInlineStyles\\' => 31,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Intl\\' => 23,
            'Symfony\\Component\\CssSelector\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\Extra\\Markdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/markdown-extra/src',
        ),
        'Twig\\Extra\\Intl\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/intl-extra/src',
        ),
        'Twig\\Extra\\CssInliner\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/cssinliner-extra/src',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'TijsVerkoyen\\CssToInlineStyles\\' => 
        array (
            0 => __DIR__ . '/..' . '/tijsverkoyen/css-to-inline-styles/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Intl\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/intl',
        ),
        'Symfony\\Component\\CssSelector\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/css-selector',
        ),
    );

    public static $classMap = array (
        'Collator' => __DIR__ . '/..' . '/symfony/intl/Resources/stubs/Collator.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'IntlDateFormatter' => __DIR__ . '/..' . '/symfony/intl/Resources/stubs/IntlDateFormatter.php',
        'Locale' => __DIR__ . '/..' . '/symfony/intl/Resources/stubs/Locale.php',
        'NumberFormatter' => __DIR__ . '/..' . '/symfony/intl/Resources/stubs/NumberFormatter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite14979788a613cb64254a5beada1a6c0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite14979788a613cb64254a5beada1a6c0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite14979788a613cb64254a5beada1a6c0::$classMap;

        }, null, ClassLoader::class);
    }
}
