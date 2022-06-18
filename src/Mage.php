<?php

namespace src;

class Mage extends Character{
    private $sort = 5;

    public function __construct($name, $weapon, $life, $attack, $sort){
        
        parent::__construct($name, $weapon, $life, $attack);
        $this->sort = $sort;
        
    }

    public function setSort($sort) {
        $this->sort = $sort;
    }

    public function getSort() {
        return $this->sort;
    }
    
    public function goingToSort($persona) {
        if($persona->getLife() === 0) {
            return "Mon opposant est déjà mort";
        }

        $persona->setLife($persona->getLife() - $this->sort);
        return $persona->getName()." ".$persona->getLife()." HP";
    }
}