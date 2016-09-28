<?php

use PHPUnit\Framework\TestCase;

class ReverseTest extends TestCase
{
    protected $client;

    public function test()
    {
        $result     = StringHandler::create('the big black cat.')->reverseWords();
        $this->assertEquals('cat black big the.', $result);

        $result     = StringHandler::create('lorem ipsum dolor sit amet consectetur adipiscing elit')->reverseWords();
        $this->assertEquals('elit adipiscing consectetur amet sit dolor ipsum lorem', $result);

        $result     = StringHandler::create('123')->reverseWords();
        $this->assertEquals('123', $result);

        $result     = StringHandler::create('')->reverseWords();
        $this->assertEquals('', $result);
    }
}
