
<?php 

$age = 18;
$br = nl2br("\n");

if ($age >= 20) {
    # code...
    echo "お酒がのめるぞ";
}else {
    echo "お酒は20歳になってから！", $br;
}

/* 
if (条件) {
    正しい時の処理
}else{
    違うときの処理
}
 */
$A = 1;
$B = 0;

if ($A == $B + 1) {
    echo 'A == B　|　AとBは等しい場合、同等', $br;
} if ($A != $B) {
    echo 'A != B 　|　AとBは等しくない場合', $br;
    }
    if ($A > $B) {
        echo 'A > B 　|　BがA未満の場合', $br;
            }
        if ($A >= $B +1) {
        echo 'A >= B 　|　AがB以上の場合', $br;
            }
            if ($A < $B + 2) {
                echo 'A < B  　|　AがB未満の場合', $br;
                    }   
                    if ($A <= $B +1) {
                        echo 'A <= B  　|　AがB以下の場合', $br;
                            }
$age = 24;
$is_student = true;

if ($age < 25 && $is_student) {
    echo '学生パックが使えるよ', $br;    
} elseif ($age < 25) {
    echo '若者応援割引が使えるよ', $br;
}

?>

<?php 
//血液型を診断する条件分岐
$blood = 'AB';
if ($blood == 'A') {
    echo 'A型です';
} elseif ($blood == 'B') {
    echo 'B型です';
} elseif ($blood == 'O') {
    echo 'O型です';
} elseif ($blood == 'AB') {
    echo 'AB型です';
} else {
    echo "A/B/O/AB から選択して下さい";
}

// Swich文　if 以外の条件分岐の書き方
$blood = 'B';

switch ($blood) {
    case 'A':
        print "A型です";
        break;
    case 'B':
        print "B型です" . $br;
        break;
    case 'O':
        print "O型です";
        break;
    case 'AB':
        print "AB型です";
        break;
    default:
    echo "A/B/O/AB から選択して下さい";
}
// 三項演算子  (条件式) ? 式1 : 式2
// 条件式が trueなら式1、falseなら式２

$name = "";

echo ($name != "") ? '名前を受けつけました' : '名前を入力してください' . $br;
echo $br . $br;

$name = "taro";
$pass = "pass";

if ($name === "taro" && $pass === "pass") {
    echo 'ログイン成功です';
} elseif ($name == "taro") {
    echo 'パスワードが間違っています';
} elseif ($pass == "pass") {
    echo '名前が間違っています';
} else {
    echo '入力が間違っています';
}
?>