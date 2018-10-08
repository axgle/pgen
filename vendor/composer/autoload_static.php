<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite41e184445747a7bd11184d21256271a
{
    public static $files = array (
        '20473fda00c7cc0c2d90e9eb640c10f6' => __DIR__ . '/../..' . '/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'pgen\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'pgen\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite41e184445747a7bd11184d21256271a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite41e184445747a7bd11184d21256271a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}