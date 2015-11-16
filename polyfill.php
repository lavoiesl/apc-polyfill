<?php

if (function_exists('apcu_add') && !function_exists('apc_add')) {
    function apc_add($key, $var, $ttl = 0)
    {
        return apcu_add($key, $var, $ttl);
    }
}

if (function_exists('apcu_cache_info') && !function_exists('apc_cache_info')) {
    function apc_cache_info($cache_type = "", $limited = false)
    {
        return apcu_cache_info($cache_type, $limited);
    }
}

if (function_exists('apcu_cas') && !function_exists('apc_cas')) {
    function apc_cas($key, $old, $new)
    {
        return apcu_cas($key, $old, $new);
    }
}

if (function_exists('apcu_clear_cache') && !function_exists('apc_clear_cache')) {
    function apc_clear_cache($cache_type = "")
    {
        return apcu_clear_cache($cache_type);
    }
}

if (function_exists('apcu_dec') && !function_exists('apc_dec')) {
    function apc_dec($key, $step = 1, &$success = null)
    {
        return apcu_dec($key, $step, $success);
    }
}

if (function_exists('apcu_delete') && !function_exists('apc_delete')) {
    function apc_delete($key)
    {
        return apcu_delete($key);
    }
}

if (function_exists('apcu_exists') && !function_exists('apc_exists')) {
    function apc_exists($keys)
    {
        return apcu_exists($keys);
    }
}

if (function_exists('apcu_fetch') && !function_exists('apc_fetch')) {
    function apc_fetch($key, &$success = null)
    {
        return apcu_fetch($key, $success);
    }
}

if (function_exists('apcu_inc') && !function_exists('apc_inc')) {
    function apc_inc($key, $step = 1, &$success = null)
    {
        return apcu_inc($key, $step, $success);
    }
}

if (function_exists('apcu_sma_info') && !function_exists('apc_sma_info')) {
    function apc_sma_info($limited = false)
    {
        return apcu_sma_info($limited);
    }
}

if (function_exists('apcu_store') && !function_exists('apc_store')) {
    function apc_store($key, $var, $ttl = 0)
    {
        return apcu_store($key, $var, $ttl);
    }
}
