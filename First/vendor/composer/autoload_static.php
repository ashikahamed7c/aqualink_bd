<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7837c8363a43f895421110ce33d69717
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7837c8363a43f895421110ce33d69717::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7837c8363a43f895421110ce33d69717::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
