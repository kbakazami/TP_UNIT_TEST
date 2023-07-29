<?php

namespace App;

class Game
{

    private Player $player01;
    private Player $player02;
    public function __construct()
    {
        $this->player01 = new Player([0, 0], 'E', true);
        $this->player02 = new Player([9, 9], 'W', false);
    }

    /**
     * @return Player
     */
    public function getPlayer01(): Player
    {
        return $this->player01;
    }

    /**
     * @return Player
     */
    public function getPlayer02(): Player
    {
        return $this->player02;
    }

    /**
     * @param Player $player01
     */
    public function setPlayer01(Player $player01): void
    {
        $this->player01 = $player01;
    }

    /**
     * @param Player $player02
     */
    public function setPlayer02(Player $player02): void
    {
        $this->player02 = $player02;
    }
}