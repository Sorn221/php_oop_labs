<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitff2dd09efbc5a6caa9d17e9f00d16346
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Miste\\Task53\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Miste\\Task53\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitff2dd09efbc5a6caa9d17e9f00d16346::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitff2dd09efbc5a6caa9d17e9f00d16346::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitff2dd09efbc5a6caa9d17e9f00d16346::$classMap;

        }, null, ClassLoader::class);
    }
}
