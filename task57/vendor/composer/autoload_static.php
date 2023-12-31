<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5e2945efa58a7538db22c75ab532afff
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Miste\\Task57\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Miste\\Task57\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5e2945efa58a7538db22c75ab532afff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5e2945efa58a7538db22c75ab532afff::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5e2945efa58a7538db22c75ab532afff::$classMap;

        }, null, ClassLoader::class);
    }
}
