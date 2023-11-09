<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb6922cda5502e90a9ef9518182d3b85
{
    public static $files = array (
        '14e04ac641445c95e0c28f5fa2a75c51' => __DIR__ . '/../..' . '/src/PointFunctions.php',
        '3b1331bfbba8d14ac6828c0df7f9059d' => __DIR__ . '/../..' . '/src/Point.php',
    );

    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bmsbsbbi\\Task10\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bmsbsbbi\\Task10\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb6922cda5502e90a9ef9518182d3b85::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb6922cda5502e90a9ef9518182d3b85::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbb6922cda5502e90a9ef9518182d3b85::$classMap;

        }, null, ClassLoader::class);
    }
}
