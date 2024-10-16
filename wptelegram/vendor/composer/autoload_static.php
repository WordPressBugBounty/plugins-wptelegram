<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcc3a45eec574a6213b3dd4e60d6a6723
{
    public static $files = array (
        '0d252e6134999215031cdb0e94a79cd5' => __DIR__ . '/..' . '/wpsocio/wptelegram-bot-api/init.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPTelegram\\BotAPI\\' => 18,
            'WPSocio\\WPUtils\\' => 16,
            'WPSocio\\TelegramFormatText\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPTelegram\\BotAPI\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpsocio/wptelegram-bot-api/src',
        ),
        'WPSocio\\WPUtils\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpsocio/wp-utils/src',
        ),
        'WPSocio\\TelegramFormatText\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpsocio/telegram-format-text/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcc3a45eec574a6213b3dd4e60d6a6723::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcc3a45eec574a6213b3dd4e60d6a6723::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcc3a45eec574a6213b3dd4e60d6a6723::$classMap;

        }, null, ClassLoader::class);
    }
}
