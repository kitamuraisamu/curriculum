<?php 
function getCuboidVolume($depth, $width, $height){
    $volume = $depth * $width * $height;
    print "長方形の面積は" . $volume . "だよ";
}

getCuboidVolume(5,10,8);

