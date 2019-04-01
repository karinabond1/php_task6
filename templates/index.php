<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
echo "Band STAR"."<br>";
echo "Derek ".$add_instrument_Derek.'<br>';
echo "Derek's instrument is ".$instrument_Derek.'<br>';
echo $inf_band_Derek."<br>";

echo "John ".$add_instrument_John.'<br>';
echo "John's instrument is ".$instrument_John.'<br>';
echo $inf_band_John."<br>";
echo $inf_add_John."<br>";

echo "Information about participants:<br>";
foreach ($band_musician_star as $value){
    echo $value."<br>";
}

echo "<br>Band SQUIRREL<br>";
echo "Mike ".$add_instrument_Mike.'<br>';
echo "Mike's instrument is ".$instrument_Mike.'<br>';
echo $inf_band_Mike."<br>";

echo "Kate ".$add_instrument_Kate.'<br>';
echo "Kate's instrument is ".$instrument_Kate.'<br>';
echo $inf_band_Kate."<br>";
echo $inf_add_Kate."<br>";

echo "Bred ".$add_instrument_Bred.'<br>';
echo "Bred's instrument is ".$instrument_Bred.'<br>';
echo $inf_band_Bred."<br>";
echo $inf_add_Bred."<br>";

echo "Information about participants:<br>";
foreach ($band_musician_squirrel as $value){
    echo $value."<br>";
}

?>


</body>
</html>