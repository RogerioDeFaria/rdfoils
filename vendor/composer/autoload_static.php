<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4765b6290b6fe61cbf07e4f252cf757a
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RDFOils\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RDFOils\\' => 
        array (
            0 => __DIR__ . '/..' . '/RDFOils/php-classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4765b6290b6fe61cbf07e4f252cf757a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4765b6290b6fe61cbf07e4f252cf757a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4765b6290b6fe61cbf07e4f252cf757a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit4765b6290b6fe61cbf07e4f252cf757a::$classMap;

        }, null, ClassLoader::class);
    }
}
