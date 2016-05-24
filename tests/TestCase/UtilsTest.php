<?php

/**
 * @author vincent.zhang
 */
class UtilsTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function testGetReadableTime()
    {
        $time = strtotime("-2 day");
        $time = Warps\Utils\getReadableTime2($time);
        $this->assertContains('天前', $time);
    }
}
