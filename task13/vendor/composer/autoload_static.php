<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36b48391119d11766f399d0f035d753f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit36b48391119d11766f399d0f035d753f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36b48391119d11766f399d0f035d753f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit36b48391119d11766f399d0f035d753f::$classMap;

        }, null, ClassLoader::class);
    }
}
