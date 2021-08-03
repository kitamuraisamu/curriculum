<?php




    $contries = ["Japan", "America", "Koria"];

//contries の文字列を全て出力するため
    for ($i = 0; $i <= 2; $i++) {

        if ((strlen($contries) < 1)){
        echo $contries[$i];
        }
    }

    //for の次 
    //左：初期化式を設定する
    //真ん中：条件式  初期値の対して条件を指定して処理をループさせる
    //右:変化式 = 初期の条件に対して変化させて無限ループを止める  
    //以上の条件を師弟する場合は 0,1,2 なので3回LOOPさせる  

?>

<?php 

$kudamono = ["Apple" => "りんご", "Orange" => "みかん", "Grape" => "ぶどう"];
echo $kudamono["Apple"];
//連想配列
// デフォルトの配列の値は数字なので、値のkeyを指定することはできる、keyとして指定した値を数字の変わりに["KEY"]指定できる
?>

<?php 

$kudamono = ["りんご", "みかん", "ぶどう"];
//連想配列
// デフォルトの配列の値は数字なので、値のkeyを指定することはできる、keyとして指定した値を数字の変わりに["KEY"]指定できる
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>果物の一覧です</p>
    <ul>
        <?php for ($i = 0; $i < count($kudamono); $i++) { ?>
        <li><?php echo $kudamono[$i]?></li>
        <?php }?>
    </ul>
</body>
</html>
