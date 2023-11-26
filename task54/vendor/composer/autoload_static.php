<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit760ea6c0c6f85310bcd7aa53882b8cd9
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Miste\\Task54\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Miste\\Task54\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit760ea6c0c6f85310bcd7aa53882b8cd9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit760ea6c0c6f85310bcd7aa53882b8cd9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit760ea6c0c6f85310bcd7aa53882b8cd9::$classMap;

        }, null, ClassLoader::class);
    }
}