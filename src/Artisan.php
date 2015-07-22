<?php

namespace Moon\Artisan;

// Helper class
class Artisan
{
    public static function getConfigFilePath()
    {
        return getcwd().'/artisan-config.php';
    }

    public static function getConfig()
    {
        return require static::getConfigFilePath();
    }
}
