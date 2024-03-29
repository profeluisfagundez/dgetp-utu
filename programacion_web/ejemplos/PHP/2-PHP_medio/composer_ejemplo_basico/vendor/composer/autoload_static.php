<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7657d8bec4c2cf8b8941bd808be1875e
{
    public static $files = array (
        'b03b0a4f24e5de11b4564945d2e9da0e' => __DIR__ . '/../..' . '/src/MyHelpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Text\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Text\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7657d8bec4c2cf8b8941bd808be1875e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7657d8bec4c2cf8b8941bd808be1875e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7657d8bec4c2cf8b8941bd808be1875e::$classMap;

        }, null, ClassLoader::class);
    }
}
