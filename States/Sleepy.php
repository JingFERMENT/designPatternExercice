<?php

require_once 'Monster.php';
require_once 'MonsterState.php';
require_once 'States/Healthy.php';

final class Sleepy implements MonsterState
{
    /** @var Monster */
    private $monster;
    
    public function attack(Monster $monster) : void
    {
        echo $this->monster->name() . ' est endormi ...' . PHP_EOL;

        // Le monstre finit par se réveiller !
        $this->monster->changeState(new Healthy());

        echo $this->monster->name() . ' se réveille et maintenant en pleine forme !' . PHP_EOL;
    }

    public function setMonster(Monster $monster) : MonsterState
    {
        $this->monster = $monster;
        
        return $this;
    }
}
