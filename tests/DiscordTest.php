<?php

use Discord\Discord;

class DiscordTest extends PHPUnit_Framework_TestCase
{

    public function testNoContentSend()
    {

        $this->expectException(\Discord\Exceptions\NoContentException::class);

        Discord::send("", "");

    }

    public function testNoURLSend()
    {

        $this->expectException(\Discord\Exceptions\NoURLException::class);

        Discord::send("Test", "");

    }

}
