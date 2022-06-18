<?php

require_once("vendor/autoload.php");

use src\{
        Character,
        Guerrier,
        Mage
};

$persona = new guerrier("Aatrox", "Lune de sang", 100, 10);
$mage = new Mage("Lux", "Baton des flots", 100, 10, 5);
$olaf = new Guerrier("Olaf", "Double Hache", 100, 10);

function lanceSort($attacker1, $attacker2)
{
        $randomNum = rand(5, 10);

        if ($randomNum === 7 || $randomNum === 9 || $randomNum === 5) {
                return $attacker1->getName()." lance un sort ".$attacker1->goingToSort($attacker2);
        } else {
                return "Le sort a raté";
        }
}

function combat($attacker1, $attacker2)
{
        do {
                if ($attacker1->getLife() > 0) {
                        echo $attacker1->getName()." attaque ".$attacker1->goingToAttack($attacker2);
                        echo "<br>";
                        echo lanceSort($attacker1, $attacker2);
                        echo "<br>";

                        if ($attacker2->getLife() === 0) {
                                return $attacker1->getName() . " a remporté le duel!";
                        }
                }
                
                if ($attacker2->getLife() > 0) {
                        echo $attacker2->getName()." attaque ".$attacker2->goingToAttack($attacker1);
                        echo "<br>";

                        if ($attacker1->getLife() === 0) {
                                return $attacker2->getName() . " a remporté le duel!";
                        }
                }

        } while ($attacker2->getLife() > 0);
}

echo '<h3 style="font-weight: lighter">';
//echo $mage->getAttack();
echo combat($mage, $persona);
