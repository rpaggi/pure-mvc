<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3559cf9cd0513fbefcdd33032d842006
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3559cf9cd0513fbefcdd33032d842006::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3559cf9cd0513fbefcdd33032d842006::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}