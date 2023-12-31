<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7e6b2f9bd8075ad614c15d4d6ba07fba
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vendor\\Php\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vendor\\Php\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7e6b2f9bd8075ad614c15d4d6ba07fba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7e6b2f9bd8075ad614c15d4d6ba07fba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7e6b2f9bd8075ad614c15d4d6ba07fba::$classMap;

        }, null, ClassLoader::class);
    }
}
