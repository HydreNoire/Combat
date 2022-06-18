<?php

namespace src;

class Character {
    protected $name;
    protected $weapon;
    protected $life = 100;
    protected $attack = 10;

    public function __construct($name, $weapon, $life, $attack)
    {
        $this->name = $name;
        $this->weapon = $weapon;
        $this->life = $life;
        $this->attack = $attack;

    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setWeapon($weapon) {
        $this->weapon = $weapon;
    }

    public function getWeapon() {
        return $this->weapon;
    }

    public function setLife($life) {
        $this->life = $life;
    }

    public function getLife() {
        return $this->life;
    }

    public function setAttack($attack) {
        $this->attack = $attack;
    }

    public function getAttack() {
        return $this->attack;
    }

    public function goingToAttack($persona) {
        if($persona->getLife() === 0) {
            return "Mon opposant est déjà mort";
        }

        $persona->setLife($persona->getLife() - $this->attack);
        return $persona->getName()." ".$persona->getLife()." HP";
    }

}