<?php

use Warps\Nutch\DbFilter;

/**
 * @author vincent.zhang
 */
class NutchTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->dbFilter = new DbFilter("a", "b", "c");
    }

    public function testDbFilter()
    {
        $this->assertContains('Pizza with ketchup', "Pizza with ketchup...");
    }
}
