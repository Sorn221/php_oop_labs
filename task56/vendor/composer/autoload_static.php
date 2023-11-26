<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b4bddc3589baed7b4807563aa55544d
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Miste\\Task56\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Miste\\Task56\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7b4bddc3589baed7b4807563aa55544d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7b4bddc3589baed7b4807563aa55544d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7b4bddc3589baed7b4807563aa55544d::$classMap;

        }, null, ClassLoader::class);
    }
}