<?php 
// count（要素の数を数える）  
$material = ["chain", "coin", "nail", "screw", "nut" , "bolt"];
echo count($material);
echo "<br>";
// => 5

// sort（要素の並べ替え, 文字列）
$material = ["chain", "coin", "nail", "screw", "nut" , "bolt"];
sort($material);
var_dump($material);
echo "<br>";

// sort（要素の並べ替え ,数字）
$numbers = [10, 40, 9, 21, 69];
sort($numbers);
var_dump($numbers);
echo "<br>";


//in_array（配列に中にある要素が存在しているか）
//in_array（if文を使い配列の中に条件に含まれるか否かで出力する値を変える）
$members = ["tanako", "sasaki", "kimura", "yoshida", "uchida"];
if (in_array("tanaka", $members)) {
    echo "田中さんがいるよ！", "<br>";
} else if(in_array("sasaki", $members))  {
    echo "田中さんはいないけど佐々木さんがいるよ！", "<br>";
}else {
    echo "誰もいないよ！", "<br>";
}

//implode（配列を結合して文字列に変換）
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("<br>", $members);
var_dump($atstr);
echo "<br>";

$atstr = implode($members);

//explode（文字列を指定の区切りで配列にする）
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);
echo "<br>";

$re_members = explode("@", $atstr);
var_dump($re_members);
echo "<br>";

$str = "1,2,3,4,5";
$array = explode(",",$str);
var_dump($array);
echo "<br>";