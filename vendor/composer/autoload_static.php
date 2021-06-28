<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9315b89e7cbc3f7e93ee8ada1d7590c8
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9315b89e7cbc3f7e93ee8ada1d7590c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9315b89e7cbc3f7e93ee8ada1d7590c8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9315b89e7cbc3f7e93ee8ada1d7590c8::$classMap;

        }, null, ClassLoader::class);
    }
}
