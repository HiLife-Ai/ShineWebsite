<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd889d29b5b94b1a905ebcfe9f040e294
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd889d29b5b94b1a905ebcfe9f040e294::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd889d29b5b94b1a905ebcfe9f040e294::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
