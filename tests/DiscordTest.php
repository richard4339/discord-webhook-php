<?php

use Discord\Discord;

class DiscordTest extends PHPUnit_Framework_TestCase
{

    public function testSend()
    {

        $send = Discord::send("Test", "");

        $this->assertNotEmpty($send);

    }

}
