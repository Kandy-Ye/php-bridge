<?php

/**
 * @author jacopo.nardiello
 */
class OutputTest extends \PHPUnit_Framework_TestCase
{
    private function newOutput($casperConsoleOutput)
    {
        return new CasperJs\Output($casperConsoleOutput);
    }

    public function testOutputWillExtractHtml()
    {
        $casperOutput = [
            CasperJs\Output::TAG_PAGE_CONTENT . "<!DOCTYPE html><html><head>",
            "        <title>Simplest possible page</title>"
        ];
        $expectedOutput = "<!DOCTYPE html><html><head>\n" .
                          "        <title>Simplest possible page</title>\n";

        $output = $this->newOutput($casperOutput);

        $this->assertEquals($expectedOutput, $output->getHtml());
    }
}
