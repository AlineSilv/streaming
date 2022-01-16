<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5dbd7d6d17325a4170964e1db09d7deb
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Theop\\Fullphp\\' => 14,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Theop\\Fullphp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5dbd7d6d17325a4170964e1db09d7deb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5dbd7d6d17325a4170964e1db09d7deb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5dbd7d6d17325a4170964e1db09d7deb::$classMap;

        }, null, ClassLoader::class);
    }
}
