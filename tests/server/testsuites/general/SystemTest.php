<?php
class SystemTest extends PHPUnit_Framework_TestCase
{
    public function test_php_version_to_low()
    {
        $this->assertGreaterThanOrEqual(70000, PHP_VERSION_ID, "No point to test it with PHP version less than PHP version 7.0!");
    }
}