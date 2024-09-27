<?php
//定数を定義する 変数に対して定数はプログラム上変更をしないものを扱う
//管理者のメールアドレスを定数とする

//index.php
define ("ADMIN_EMAIL", "y-1-group@gmail.com");

// index.php
define ("LIST_COUNT", 15);

echo ADMIN_EMAIL;
echo '<br>';
echo LIST_COUNT;

//代入演算子
$x = 1;

//連結演算子
echo "hello"."world";
echo "<br>";

//変数に入れた状態の連結演算子
$hello = "Hello";
$world = "World";
echo $hello.$world;
echo "<br>";

// 四則演算子　（計算機号）
echo 1 + 1;
// 改行は見やすくなるので適宜いれる
echo "<br>";
echo 10 - 1;
echo "<br>";
echo 2 * 2;
echo "<br>";
echo 10 / 5;
echo "<br>";
echo 4 % 6;
echo "<br>";
echo "<br>";

// 単項演算子
//$x = $x + 1
$x++;
echo $x;
echo "<br>";

//$x = $x - 1
$x--;
echo $x;
echo "<br>";

$x = 0;

// $x = $x + 5
$x += 5;
echo $x;
echo "<br>";

// $x = $x * 5;
$x *= 5;
echo $x;
echo "<br>";

$x /= 15;
echo $x;


?>

