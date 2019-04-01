<?php
/**
 * Created by PhpStorm.
 * User: karin
 * Date: 01.04.2019
 * Time: 02:28
 */

include_once "iInstrument.php";
include_once 'iMusician.php';

class Musician implements iMusician
{

    private $arr_instrument;
    private $musician_type;
    private $band;
    private $name;
    private $status;

    function __construct($musician_type, $name, $status)
    {
        $this->arr_instrument = array();
        $this->musician_type = $musician_type;
        $this->name = $name;
        if ($status == 1) {
            $this->status = "leader";
        } else {
            $this->status = "participant";
        }

    }

    public function addInstrument(iInstrument $obj)
    {
        if (array_push($this->arr_instrument, $obj)) {
            return "Was added an instrument";
        } else {
            return "Was NOT add an instrument";
        }
    }

    public function getName()
    {
        return$this->name;
    }

    public function getInstrument()
    {
        foreach ($this->arr_instrument as $key => $value) {
            return $value->getName() . " - " . $value->getCategory();
        }
    }

    public function assingToBand(iBand $nameBand)
    {
        $this->band = $this->name . " is " . $this->status . " band name: " . $nameBand->getName() . ", band genre: " . $nameBand->getGenre();
        return $this->band;
    }

    public function getMusicianType()
    {
        return $this->musician_type;
    }
}