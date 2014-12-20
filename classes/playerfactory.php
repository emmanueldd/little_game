<?php
class PlayerFactory
{
    private $_source;

    public function __construct($source, $_i)
    {
        $this->_source = $source;
        $this->makeAllPlayers($this->_source, $_i);

    }

    // crée les joueurs en utilisant Player
    public function makeAllPlayers($line, $_i)
    {
        global $player;
        $string_length = strlen($line);
        $delimiter = strpos($line, ';');
        $classname = substr($line, 0, $delimiter);
        $classname = preg_replace('/\s+/', '', $classname);
        $playerFromCsv = substr($line, $delimiter + 1, $string_length);
        $player[$_i] = new $classname($playerFromCsv);
        echo ' et je m instancie depuis $player['.$_i.']';
    }

}