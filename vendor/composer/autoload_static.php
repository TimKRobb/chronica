<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1cafafb466361c047802cf1a9857aed7
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Chronica\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Chronica\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1cafafb466361c047802cf1a9857aed7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1cafafb466361c047802cf1a9857aed7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}