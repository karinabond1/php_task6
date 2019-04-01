<?php

include_once 'config.php';
include_once 'libs/Band.php';
include_once 'libs/Instrument.php';
include_once 'libs/Musician.php';

$instrument_guitar = new Instrument("guitar","Strings");
$instrument_violin = new Instrument("violin","Strings");
$instrument_balalaika = new Instrument("balalaika","Strings");
$instrument_flute = new Instrument("flute","Brass");
$instrument_saxophone = new Instrument("saxophone","Brass");
$instrument_trumpet = new Instrument("trumpet","Brass");
$instrument_piano = new Instrument("piano","Keyboards");
$instrument_organ = new Instrument("organ","Keyboards");
$instrument_synthesizer = new Instrument("synthesizer","Keyboards");
$instrument_gong = new Instrument("gong","Drums");
$instrument_triangle = new Instrument("triangle","Drums");
$instrument_steelpan = new Instrument("steelpan","Drums");

$band_star = new Band("STAR","pop");

$musician_Derek = new Musician("pop","Derek",1);
$add_instrument_Derek = $musician_Derek->addInstrument($instrument_piano);
$instrument_Derek = $musician_Derek->getInstrument();
$inf_band_Derek = $musician_Derek->assingToBand($band_star);


$musician_John = new Musician("pop","John",0);
$add_instrument_John = $musician_John->addInstrument($instrument_guitar);
$instrument_John = $musician_John->getInstrument();
$inf_band_John = $musician_John->assingToBand($band_star);
$inf_add_John = $band_star->addMusician($musician_John);
$band_musician_star = $band_star->getMusician();


$band_squirrel = new Band("SQUIRREL","jazz");

$musician_Mike = new Musician("jazz","Mike",1);
$add_instrument_Mike = $musician_Mike->addInstrument($instrument_saxophone);
$instrument_Mike = $musician_Mike->getInstrument();
$inf_band_Mike = $musician_Mike->assingToBand($band_squirrel);


$musician_Kate = new Musician("jazz","Kate",0);
$add_instrument_Kate = $musician_Kate->addInstrument($instrument_synthesizer);
$instrument_Kate = $musician_Kate->getInstrument();
$inf_band_Kate = $musician_Kate->assingToBand($band_squirrel);
$inf_add_Kate = $band_squirrel->addMusician($musician_Kate);

$musician_Bred = new Musician("jazz","Bred",0);
$add_instrument_Bred = $musician_Bred->addInstrument($instrument_triangle);
$instrument_Bred = $musician_Bred->getInstrument();
$inf_band_Bred = $musician_Bred->assingToBand($band_squirrel);
$inf_add_Bred = $band_squirrel->addMusician($musician_Bred);
$band_musician_squirrel = $band_squirrel->getMusician();


include_once 'templates/index.php';
?>