<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ba7a62a39a5e36056dbebde813798b8
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'models\\' => 7,
        ),
        'c' => 
        array (
            'core\\' => 5,
            'controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ba7a62a39a5e36056dbebde813798b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ba7a62a39a5e36056dbebde813798b8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}