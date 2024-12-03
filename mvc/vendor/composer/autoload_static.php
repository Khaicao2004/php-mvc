<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit318d92ce44f6de7d42d0195dcdf1971d
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit318d92ce44f6de7d42d0195dcdf1971d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit318d92ce44f6de7d42d0195dcdf1971d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit318d92ce44f6de7d42d0195dcdf1971d::$classMap;

        }, null, ClassLoader::class);
    }
}
