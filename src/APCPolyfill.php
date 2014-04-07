<?php

namespace Lavoiesl\APCPolyfill;

class APCPolyfill
{
    public static function createAliases()
    {
        if (!function_exists('apc_fetch')) {
            if (function_exists('apcu_fetch')) {
                require dirname(__DIR__) . '/polyfill.php';
            } else {
                throw new \RuntimeException('APCu not loaded.');
            }
        }
    }
}
