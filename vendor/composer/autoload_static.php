<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita261e55c8aaccd6b5c3351db52f3a1f2
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Instamojo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Instamojo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita261e55c8aaccd6b5c3351db52f3a1f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita261e55c8aaccd6b5c3351db52f3a1f2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}