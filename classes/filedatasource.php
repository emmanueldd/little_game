<?php

abstract class FileDataSource
{
    protected $_filePath;

    public function __construct($filePath)
    {
        $this->_filePath = $filePath;

    }
}

class CsvDataSource extends FileDataSource
{
    public function __construct($filePath)
    {
        parent::__construct($filePath);
        $this->nextElement($this->_filePath);

    }

    public function nextElement($dictionnary)
    {
        $csvfile = fgetcsv(fopen($dictionnary, "r"));
        $player = array();
        $i = 0;
        foreach ($csvfile as $line) {
            $player[$i] = new PlayerFactory($line, $i);
            $i++;
        }
    }

}

class JsonDataSource extends FileDataSource
{
    public function __construct($filePath)
    {
        parent::__construct($filePath);
//        $csvfile = fgetcsv(fopen($_FILES["csv"]["tmp_name"], "r"));
//
//        $player = array();
//        $i = 0;
//        foreach ($csvfile as $line) {
//            $string_length = strlen($line);
//            $delimiter = strpos($line, ';');
//            $classname = substr($line, 0, $delimiter);
//            $player[$i][$classname] = substr($line, $delimiter + 1, $string_length);
//            $i++;
//        }

    }

    public function nextElement($dictionnary)
    {


    }

}