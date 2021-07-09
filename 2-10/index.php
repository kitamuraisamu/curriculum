<?php 
function getcuboidarea($depth, $width, $height){
    $area = $depth * $width * $height;
    print "長方形の面積は" . $area . "だよ";
}

getcuboidarea(5,10,8);

