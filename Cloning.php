<?php

class Cloning
{
    public $name;
    public $color;


    public function setName($name)
    {
        $this->name = $name;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getColor()
    {
        return $this->color;
    }

}

$first = new Cloning();
$first->setName('kx-1422');
$first->setColor('black');
$second = clone $first;
$second->setName('az-1422');

var_dump($first);
var_dump($second);
