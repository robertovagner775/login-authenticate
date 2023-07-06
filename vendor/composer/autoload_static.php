<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit673461e0240430aa07e587af68b75334
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'P' => 
        array (
            'Pecee\\' => 6,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Pecee\\' => 
        array (
            0 => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit673461e0240430aa07e587af68b75334::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit673461e0240430aa07e587af68b75334::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit673461e0240430aa07e587af68b75334::$classMap;

        }, null, ClassLoader::class);
    }
}
