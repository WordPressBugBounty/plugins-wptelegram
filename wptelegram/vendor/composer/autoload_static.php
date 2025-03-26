<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f22db83b0053400e648614fbb59278d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f22db83b0053400e648614fbb59278d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f22db83b0053400e648614fbb59278d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9f22db83b0053400e648614fbb59278d::$classMap;

        }, null, ClassLoader::class);
    }
}
