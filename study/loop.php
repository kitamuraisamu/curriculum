<?php 
//whille 繰り返しが決まっていない場合の処理
$num = 0;
while ($num < 10) {
    echo $num; //条件 $num < 10が成り立つので処理が実行される 
    $num++; // $num = 0 の値に+1をして上の条件に戻る この処理がない場合は無限に0として処理されてしまう。
}
echo "<br>";
//do..while 一回は繰り替えをしたい場合
$num = 0;
do {
    echo $num;
    $num++; //doを先に処理するのでwhileの条件に該当してないとしても最低一回は処理が実行される。
} while ($num < 10);
echo "<br>";
//for 繰り返す回数が決まっている時
//for (初期値 =最初に実行される処理; 条件式 = while文同様に繰り返し処理をする判定のための式 trueなら処理が実行される; 変化式 = 条件式を実行したのちに処理をする) { 

for ($num=0; $num < 10; $num++) { 
    echo $num;
}
echo "<br>";
//break  繰り替えし処理を途中で終了させる処理
$num = 0;
while ($num < 10) {
    echo $num;
    $num++;
    if ($num == 5) {
        break;
    }
}
echo "<br>";

for ($num=0; $num < 101; $num++) { 
    echo $num . "<br>";
}

?>