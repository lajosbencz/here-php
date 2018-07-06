<?php

class BaseTest extends \PHPUnit\Framework\TestCase
{
    /** @var array */
    protected static $config = [];

    /** @var \Here\Service */
    protected static $service = null;

    public static function setUpBeforeClass()
    {
        self::$config = require __DIR__ . '/config.php';
        self::$service = new \Here\Service(self::$config);
    }
}