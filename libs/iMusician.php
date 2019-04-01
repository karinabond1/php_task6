<?php
/**
 * Created by PhpStorm.
 * User: karin
 * Date: 01.04.2019
 * Time: 02:27
 */

interface iMusician
{
    public function addInstrument(iInstrument $obj);
    public function getInstrument();
    public function assingToBand(iBand $nameBand);
    public function getMusicianType();
}