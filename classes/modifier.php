<?php

abstract class Modifier
{
    protected $_levelMin;
    protected $_name;

    public function __construct($levelMin, $name)
    {
        $this->_levelMin = $levelMin;
        $this->_name = $name;
    }
}

class HealthModifier extends Modifier
{
    private $_value = 2;
    public function __construct()
    {
        parent::construct($this->_value, get_class($this));
    }
}

class StrengthModifier
{
    private $_value = 2;
    public function __construct()
    {
        parent::construct($this->_value, get_class($this));
    }

}

class MagicPowerModifier
{
    private $_value = 2;
    public function __construct()
    {
        parent::construct($this->_value, get_class($this));
    }

}

class ArmorModifier
{
    private $_value = 2;
    public function __construct()
    {
        parent::construct($this->_value, get_class($this));
    }

}

class DexterityModifier
{
    private $_value = 2;
    public function __construct()
    {
        parent::construct($this->_value, get_class($this));
    }

}