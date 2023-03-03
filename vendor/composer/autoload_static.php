<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc957036924ab9e82d32b2b269f8a6584
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Orhanerday\\OpenAi\\' => 18,
        ),
        'K' => 
        array (
            'Khill\\FontAwesome\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Orhanerday\\OpenAi\\' => 
        array (
            0 => __DIR__ . '/..' . '/orhanerday/open-ai/src',
        ),
        'Khill\\FontAwesome\\' => 
        array (
            0 => __DIR__ . '/..' . '/khill/fontawesomephp/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc957036924ab9e82d32b2b269f8a6584::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc957036924ab9e82d32b2b269f8a6584::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc957036924ab9e82d32b2b269f8a6584::$classMap;

        }, null, ClassLoader::class);
    }
}