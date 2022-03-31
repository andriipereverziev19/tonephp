<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1729f11ae1b0ad48d9e20b7c56af5d0e
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tonephp\\' => 8,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tonephp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1729f11ae1b0ad48d9e20b7c56af5d0e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1729f11ae1b0ad48d9e20b7c56af5d0e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1729f11ae1b0ad48d9e20b7c56af5d0e::$classMap;

        }, null, ClassLoader::class);
    }
}
