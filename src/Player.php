<?php

namespace App;

class Player
{
    private $position;
    private $rotation;
    private $turn;

    public function __construct($position, $rotation, $turn)
    {
        $this->position = $position;
        $this->rotation = $rotation;
        $this->turn = $turn;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position): void
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getRotation()
    {
        return $this->rotation;
    }

    /**
     * @param mixed $rotation
     */
    public function setRotation($rotation): void
    {
        $this->rotation = $rotation;
    }

    public function getTurn()
    {
        return $this->turn;
    }

    /**
     * @param mixed $turn
     */
    public function setTurn($turn): void
    {
        $this->turn = $turn;
    }

}