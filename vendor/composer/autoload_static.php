<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit011f03c3276853c0f85b7d41792fcda4
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit011f03c3276853c0f85b7d41792fcda4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit011f03c3276853c0f85b7d41792fcda4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit011f03c3276853c0f85b7d41792fcda4::$classMap;

        }, null, ClassLoader::class);
    }
}
