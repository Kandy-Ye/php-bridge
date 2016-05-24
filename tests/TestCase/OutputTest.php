<?php

/**
 * @author jacopo.nardiello
 */
class OutputTest extends \PHPUnit_Framework_TestCase
{
    public function testOutputWillExtractHtml()
    {
        $this->assertContains('Pizza with ketchup', "Pizza with ketchup...");
    }
}
