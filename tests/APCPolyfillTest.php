<?php

namespace Lavoiesl\APCPolyfill\Test;

use Lavoiesl\APCPolyfill\APCPolyfill;

class APCPolyfillTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateAliases()
    {
        if (function_exists('apc_fetch')) {
            $this->markTestSkipped(
              'APC must not be loaded for tests to be meaningful.'
            );
        } elseif (!function_exists('apcu_fetch')) {
            $this->markTestSkipped(
              'APCu extension is needed.'
            );
        }

        $this->assertFalse(function_exists('apc_fetch'));

        APCPolyfill::createAliases();

        $this->assertTrue(function_exists('apc_fetch'));
    }

    public function testAPC()
    {
        $key = 'APCPolyfillTest';

        apc_store($key, 1);
        apc_inc($key, 2);
        apc_dec($key);

        $this->assertEquals(apc_fetch($key, $success), 2);
        $this->assertTrue($success);

        apc_delete($key);

        apc_fetch($key, $success);
        $this->assertFalse($success);
    }
}
