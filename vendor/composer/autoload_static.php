<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4f6efcd270a3a111c6efb694d2658bf
{
    public static $files = array (
        'd3b7e5895dffcba10223dccb5ef8b56b' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite4f6efcd270a3a111c6efb694d2658bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4f6efcd270a3a111c6efb694d2658bf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
