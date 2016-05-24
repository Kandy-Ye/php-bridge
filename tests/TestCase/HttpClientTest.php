<?php

namespace Cake\Test\Fixture;

use Warps\TestSuite\TestCase;
use Warps\Utils\HttpClient;

/**
 * This class helps in indirectly testing the functionalities of TestCase::assertHtml
 *
 */
class HttpClientTestCase extends TestCase
{
    /**
     * test that assertHtml knows how to handle correct quoting.
     *
     * @return void
     */
    public function testAssertHtmlQuotes()
    {
        $client = new HttpClient();
        $result = $client->get_content("http://www.baidu.com/");

        $pattern = [
            'a' => ['href' => 'preg:/.*\.html/', 'class' => 'active'],
            'My link',
            '/a'
        ];
        $this->assertHtml($pattern, $result);
    }
}
