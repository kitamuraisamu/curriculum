<?php 
// 代入演算子


echo "Hello" . "World";

// 連結演算子
$hello = "Hello";
$world = "World!";
echo $hello.$world;

//四則演算子
echo 1 + 1;
echo '<br>';
echo 10 - 1;
echo '<br>';
echo 3 * 4;
echo '<br>';
echo 10 / 5;
echo '<br>';
echo 5 % 3 . '<br>';

//単項演算子 ++ 1をたす -- 1を引く
$x++;
echo $x . '<br>';
$x--;
echo $x . '<br>';

//演算子、ショートハンド　 += -= *= などの方法がある 自分自身に式をつける
$x = 0;

// $x = $x = 5;
$x += 5;
echo $x . '<br>';

//$x = $x * 5
$x *= 5;
echo $x . '<br>';

$x -= 5;
echo $x;





?>