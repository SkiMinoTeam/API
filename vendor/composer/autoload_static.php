<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16fbde0b5e5ccfaf682e1a4650f37ef3
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit16fbde0b5e5ccfaf682e1a4650f37ef3::$classMap;

        }, null, ClassLoader::class);
    }
}
