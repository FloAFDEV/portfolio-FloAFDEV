<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit867040d8b6f22deac82cd049a8f4f6ed
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit867040d8b6f22deac82cd049a8f4f6ed::$classMap;

        }, null, ClassLoader::class);
    }
}
