<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1ba99c270baf2d271cf55ccfda22b3a
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'ebestmall\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ebestmall\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite1ba99c270baf2d271cf55ccfda22b3a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1ba99c270baf2d271cf55ccfda22b3a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
