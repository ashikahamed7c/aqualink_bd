<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit63d6c5157c33ea84c77a4dd716eb40ac
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit63d6c5157c33ea84c77a4dd716eb40ac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit63d6c5157c33ea84c77a4dd716eb40ac::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
