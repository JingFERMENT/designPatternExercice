<?php

require_once 'Monster.php';
require_once 'MonsterState.php';

final class Crazy implements MonsterState
{
    /** @var Monster */
    private $monster;
    
    public function attack(Monster $monster) : void
    {
        // un pourcentage de chance de se blesser
        if ($this->isTooMuchCrazy())
        {
            // le monstre se blesse tout seul, du fait de sa propre force...
            $monster->healthPoints -= $this->monster->strength();

            
            echo $this->monster->name() . ' est fou et s\'inflige des dégats' . PHP_EOL;
        } else {
            $monster->healthPoints -= $this->monster->strength();
        
            echo $this->monster->name() . ' attaque malgré sa folie' . PHP_EOL;
        }
        
    }

    public function setMonster(Monster $monster) : MonsterState
    {
        $this->monster = $monster;
        
        return $this;
    }

    private function isTooMuchCrazy() : bool
    {
        // retourner une condition aléatoire (cf fonction rand() de PHP)
        return (bool) rand(0,1);
    }
}