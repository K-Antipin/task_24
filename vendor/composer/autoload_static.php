<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit851d2d142f0d5071940150a261064194
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit851d2d142f0d5071940150a261064194::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit851d2d142f0d5071940150a261064194::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit851d2d142f0d5071940150a261064194::$classMap;

        }, null, ClassLoader::class);
    }
}
