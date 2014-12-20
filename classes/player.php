<?php

include('icomparable.php');

abstract class Player implements IComparable
{
    protected $_name;
    protected $_level = 1;
    protected $_health = 100;
    protected $_armor = 20;
    protected $_weapon;
// type de classe
    public function __construct($name)
    {
        $this->_name = $name;

    }

    abstract public function attack(Player $player);
    abstract public function lootWeapon(Weapon $weapon);

}

class Hunter extends Player
{
    private $_dexterity = 2;
    private $_energy = 4;
    private $_damage;

    public function __construct($name)
    {
        //die('die');
        parent::__construct($name);
        $this->_damage = $this->_dexterity * (1.2 + ($this->_level*0.5) + (1/$this->_energy)*2);
        echo '<br> mon nom est '.$this->_name.' et je suis un '.get_class($this);

    }

    public function compare(Player $player1, Player $player2)
    {
        if ($player1->_level > $player2->_level)
            echo $player1->_name.' Est plus fort que '.$player2->_name;
        elseif ($player1->_level < $player2->_level)
            echo $player2->_name.' Est plus fort que '.$player1->_name;
        elseif ($player1->_level == $player2->_level)
            echo $player2->_name.' est aussi fort que '.$player1->_name;
    }

    public function attack(Player $player) // $player = new Player ou new Hunter
    {
        $playerLife = $player->_health;
        $playerLife -= $this->_damage;
        echo $playerLife;

    }

    public function lootWeapon(Weapon $weapon)
    {

        parent::$_weapon = $weapon;
        /// Optionel
    }

    public function getEnergy()
    {
        echo $this->_energy;
    }

    public function getName()
    {
        echo $this->_name;
    }

}

class Warrior extends Player
{
    private $_dexterity;
    private $_energy;
    private $_damage;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->_dexterity = 2;
        $this->_energy = 100;
        $this->_damage = $this->_dexterity * (1.2 + ($this->_level*0.5) + (1/$this->_energy)*2);
        echo '<br> mon nom est'.$this->_name.' et je suis un '.get_class($this);
    }

    public function compare(Player $player1, Player $player2)
    {
        if ($player1->_level > $player2->_level)
            echo $player1->_name.' Est plus fort que '.$player2->_name;
        elseif ($player1->_level < $player2->_level)
            echo $player2->_name.' Est plus fort que '.$player1->_name;
        elseif ($player1->_level == $player2->_level)
            echo $player2->_name.' est aussi fort que '.$player1->_name;
    }

    public function attack(Player $player) // $player = new Player ou new Hunter
    {
        $playerLife = $player->_health;
        $playerLife -= $this->_damage;
        echo $playerLife;

    }

    public function lootWeapon(Weapon $weapon)
    {

        parent::$_weapon = $weapon;
        /// Optionel
    }

    public function getName()
    {
        echo $this->_name;
    }

//    public function attack(Player $player) // Si on passe autre chose qu'un player, on est exit
//    {
//        $playerLife = get_class($player)->$this->life;
//        $playerLife = $playerLife - $this->_damage;
//    }

}

class Wizard extends Player
{
    private $_magicPower= 1;
    private $_mana = 1;
    private $_damage = 1;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->_damage = $this->_magicPower * (1.8 + ($this->_level * 0.5) + (1/$this->_mana) * 0.5);
        echo '<br> mon nom est '.$this->_name.' et je suis un '.get_class($this);
    }

    public function compare(Player $player1, Player $player2)
    {
        if ($player1->_level > $player2->_level)
            echo $player1->_name.' Est plus fort que '.$player2->_name;
        elseif ($player1->_level < $player2->_level)
            echo $player2->_name.' Est plus fort que '.$player1->_name;
        elseif ($player1->_level == $player2->_level)
            echo $player2->_name.' est aussi fort que '.$player1->_name;
    }

    public function getMana()
    {
        echo $this->_mana;
    }

    public function attack(Player $player) // $player = new Player ou new Hunter
    {
        $playerLife = $player->_health;
        $playerLife -= $this->_damage;
        echo $playerLife;

    }

    public function lootWeapon(Weapon $weapon)
    {

        parent::$_weapon = $weapon;
        /// Optionel
    }

    public function getName()
    {
        echo $this->_name;
    }

//    public function attack(Player $player) // $player = new Player ou new Hunter
//    {
//        $playerLife = $player->$this->life;
//        $playerLife = $playerLife - $this->$_damage;
//    }
}
