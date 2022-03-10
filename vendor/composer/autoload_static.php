<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb0ba30774c6bf5dcdd5fd0a1695eb06a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb0ba30774c6bf5dcdd5fd0a1695eb06a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb0ba30774c6bf5dcdd5fd0a1695eb06a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb0ba30774c6bf5dcdd5fd0a1695eb06a::$classMap;

        }, null, ClassLoader::class);
    }
}