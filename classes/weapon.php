<?php

//include('icomparable.php');
abstract class Weapon // implements IComparable
{
    protected $_level;
    protected $_name;
    protected $_modifiers;

    public function __construct($_level, $_name, $_modifiers)
    {
        $this->_level = $_level;
        $this->_name = $_name;
        $this->_modifiers = $_modifiers;
    }

//    public function compare()
//    {
//        // a > b (a.level > b.level) || (a.level == b.level && a.modifiers.count > b.modifiers.count) 
//        // a = b a.level == b.level && a.modifier.count == b.modifiers.count 
//    }

}

class Axe extends Weapon
{
    public function __construct($_level, $_name, $_modifiers)
    {
        parent::__construct($_level, $_name, $_modifiers);
    }



}

class Wand extends Weapon
{
    public function __construct($_level, $_name, $_modifiers)
    {
        parrent::__construct($_level, $_name, $_modifiers);
    }

    public function compare()
    {
        // a > b (a.level > b.level) || (a.level == b.level && a.modifiers.count > b.modifiers.count) 
        // a = b a.level == b.level && a.modifier.count == b.modifiers.count 
    }

}

class Bow extends Weapon
{
    public function __construct($_level, $_name, $_modifiers)
    {
        parrent::__construct($_level, $_name, $_modifiers);
    }

    public function compare($IComparable)
    {

    }

}


?>
