<?php 

$numbers = [1,3,6,9,17,35,46,62,74,89];
foreach($numbers as $value){
    $flg = true; //判定フラグ
for($i=2; $i<$value; $i++) {
  if($value % $i == 0) {
    $flg = false; 
    break;
  }
}
if ($flg) {
  echo $value , "は素数です。" ,"<br>";
} else {
}
}
