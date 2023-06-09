<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36d56e721e897603034e8e15f33c2224
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'InfiniteEye\\Modal\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'InfiniteEye\\Modal\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit36d56e721e897603034e8e15f33c2224::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36d56e721e897603034e8e15f33c2224::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit36d56e721e897603034e8e15f33c2224::$classMap;

        }, null, ClassLoader::class);
    }
}
