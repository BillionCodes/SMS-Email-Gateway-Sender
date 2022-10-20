<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0619f1b6548fc70cbb5b8f280a8a0fd0
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0619f1b6548fc70cbb5b8f280a8a0fd0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0619f1b6548fc70cbb5b8f280a8a0fd0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0619f1b6548fc70cbb5b8f280a8a0fd0::$classMap;

        }, null, ClassLoader::class);
    }
}
