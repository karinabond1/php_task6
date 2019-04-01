<?php
/**
 * Created by PhpStorm.
 * User: karin
 * Date: 01.04.2019
 * Time: 02:27
 */

include_once 'iBand.php';

class Band implements iBand
{
    private $name;
    private $genre;
    private $arr_musician;

    function __construct($name, $genre)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->arr_musician = array();
        $this->arr_musician_genre = array();
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function addMusician(iMusician $obj)
    {
        if(array_push($this->arr_musician,$obj)){
            return $obj->getName()." was added as musician";
        }else{
            return "Was NOT added as musician";
        }
    }

    public function getMusician()
    {
        $arr_musician_res = array();
        foreach ($this->arr_musician as $key=>$value){
            array_push( $arr_musician_res, "Name ".$value->getName()." type - ".$value->getMusicianType()." instument: ".$value->getInstrument());
        }
        return $arr_musician_res;
    }
}