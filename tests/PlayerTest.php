<?php

namespace App;

use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    public function testPlayerExist()
    {
        $player = new Player([0, 0], 'E', true);

        $this->assertInstanceOf(Player::class, $player);
    }

}

