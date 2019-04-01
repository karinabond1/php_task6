<?php
/**
 * Created by PhpStorm.
 * User: karin
 * Date: 01.04.2019
 * Time: 02:27
 */

include_once "iInstrument.php";

class Instrument implements iInstrument
{
    private $name;
    private $category;

    function __construct($name, $category)
    {
        $this->name = $name;
        $this->category = $category;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCategory()
    {
        return $this->category;
    }
}