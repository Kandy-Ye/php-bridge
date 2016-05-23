<?php

use Warps\Nutch\DbFilter;

/**
 * @author jacopo.nardiello
 */
class DriverTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->dbFilter = new DbFilter();
    }

    /**
     * @expectedException \Exception
     */
    public function testDbFilter()
    {
        
    }
}
