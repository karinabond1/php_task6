<?php
/**
 * Created by PhpStorm.
 * User: karin
 * Date: 01.04.2019
 * Time: 02:26
 */

interface iBand
{
    public function getName();
    public function getGenre();
    public function addMusician(iMusician $obj);
    public function getMusician();
}