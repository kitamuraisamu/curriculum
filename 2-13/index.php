<?php 
// ceil (小数点の切り上げ)
$num = 3.5;
echo "3.5 →" . ceil($num) . "　　ceil (小数点の切り上げ)<br>";

// floor (小数点の切り捨て)
$num = 3.5;
echo "3.5 →" . floor($num) . "　　floor (小数点の切り捨て)<br>";

// round (小数点の切り捨て)
$num = 3.5;
echo "3.5 →" . round($num) . "　　round (四捨五入)<br>";

// round (小数点の切り捨て)
$num = 3.55;
echo "3.55 →" . round($num, 1) . "　　round (四捨五入 , 小数点の位)<br>";

// pi（円周率）

// mt_rand（乱数）

// strlen（文字列の長さ）

$str = "Hello!";
$strjp = "ハロー！";

$length = strlen($str);
$mb_length = mb_strlen($strjp);
echo $length . "　　文字列バイト" . "<br>";
echo $mb_length . "　　日本語文字列バイト" . "<br>";


// strpos（検索）
$str = "kitamura";
echo strpos($str, "m") ."　　部分文字の最初に現れる位置" . "<br>";

$mystring =  "kitamura";
$findme = "m";
$pos = strpos($mystring , $findme);
if ($pos == false) {
    echo "文字列 '$findme' は、文字列 '$mystring' の中で見つかりませんでした";
} else {
    "文字列 '$findme'は、文字列 '$mystring' の中で見つかりました。";
    echo "見つかった位置は '$pos'です" . "<br>";
}

// substr（文字列の切り取り）
$str = "substr";
echo substr($str, -3 , 3) ."<br>";

// str_replace（置換）

$str = "I am kitamura isamu ";
$target = "I am";
$replace = "I am not";
echo str_replace($target, $replace, $str). "<br>";

$str = "AAAa<br />AAAb<br />AAAc<br />";
  echo $str;
$str = str_replace("AAA", "BBB", $str,$n);
  echo $str;
  echo $n."回置き換えました". "<br>";

// printf（フォーマット化した文字列を出力）
$who = "私";
$hour = 3;
printf("%sはprintfメソッドを理解するのに%d時間以上も費やした"."<br>", $who ,$hour );

$minute = 40;

printf("%sはprintfメソッドを理解するのに%d時間%02d分費やした"."<br>", $who ,$hour,$minute );

// sprintf（変数に代入できるprintf）
$name = "田中";
$goods = "シュークリーム";
$piece = "15";
$format = sprintf("%sさんは%sを%d個買いました",$name,$goods,$piece);

echo $format;