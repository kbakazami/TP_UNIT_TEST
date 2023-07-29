<?php

namespace App;

use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{

    private $game;

    /**
     * @before
     */
    public function testGameExist()
    {
        $this->game = new Game();

        $this->assertInstanceOf(Game::class ,$this->game);
    }

    public function testInitPlayer01()
    {
        $player01 = $this->game->getPlayer01();
        $player01Position = $player01->getPosition();
        $player01Rotation = $player01->getRotation();
        $player01Turn = $player01->getTurn();

        $this->assertEquals([0,0], $player01Position);
        $this->assertEquals('E', $player01Rotation);
        $this->assertEquals(true, $player01Turn);
    }

    public function testInitPlayer02()
    {
        $player02 = $this->game->getPlayer02();
        $player02Position = $player02->getPosition();
        $player02Rotation = $player02->getRotation();
        $player02Turn = $player02->getTurn();

        $this->assertEquals([9,9], $player02Position);
        $this->assertEquals('W', $player02Rotation);
        $this->assertEquals(false, $player02Turn);
    }

}