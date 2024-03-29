<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit311c7a785a2af4ab4dae0f24542d289d
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
            0 => __DIR__ . '/../..' . '/src/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit311c7a785a2af4ab4dae0f24542d289d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit311c7a785a2af4ab4dae0f24542d289d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit311c7a785a2af4ab4dae0f24542d289d::$classMap;

        }, null, ClassLoader::class);
    }
}
