<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite33438cffa5da83acae5ba4531f3d9b8
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite33438cffa5da83acae5ba4531f3d9b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite33438cffa5da83acae5ba4531f3d9b8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
