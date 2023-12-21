
<?php
//開始タグ


// コメントアウト　行頭：　//  #  複数行： /* */    ショートカット：ctrl+/

// 変数の使い方
$name = 'KENTA';

//PHP_EOL; というキーワードを使ってあげれば、環境に応じて適切に改行
// echo 'Hello Kenta'.PHP_EOL;
// echo 'Hello Kido'.PHP_EOL;

echo 'Hello '.$name.PHP_EOL;

//文中でシングルクオーテーションを用いたい場合
echo "It's me. Hello ".$name.PHP_EOL;

//文字列に変数を埋め込みたい場合
echo "It's me. Hello $name".PHP_EOL;

//ダブルクオーテーション中でダブルクオーテーションを用いたい場合
echo "It's \"me\". Hello $name".PHP_EOL;

//特殊文字：タブ
echo "It's me.\tHello $name".PHP_EOL;

//<<<'EOT' 改行、 EOT; としてあげると、ここに書いたテキストの改行や字下げは保持したまま、 $text という変数に代入してくれる
    // $text = <<<'EOT'
    // hello!
    //  this is a long text
    // Goodbye!
    // EOT;
    // echo $text;

// ダブルクオーテーションまたは終端記号のみだと変数を代入可能になる（heredoc、シングルクオーテーションはnowdoc）
    // $text = <<<"EOT"
$text = <<<EOT
hello!
    this is $name
Goodbye!
EOT;

echo $text;

//演算
echo 10 + 3 . PHP_EOL; // 13
echo 10 - 3 . PHP_EOL; // 7
echo 10 * 3 . PHP_EOL; // 30
echo 10 / 3 . PHP_EOL; // 3.3333...
echo 10 % 3 . PHP_EOL; // 1
//べき乗
echo 10 ** 3 . PHP_EOL; // 1000
//文字列の数字への自動変換
echo 2 + '3' . PHP_EOL; // 5

$price = 500;
// 同じ変数への足し算
$price = $price + 100;
$price += 100;
// １を足し引き
$price ++;
$price --;
echo $price.PHP_EOL;

// 定数
    // 定数は慣習的に大文字になるのと、あと変数と違って $ は付かない
define('MYFAMILYNAME','KIDO');
echo MYFAMILYNAME.PHP_EOL;

const MYFIRSTNAME = 'KENTA';
echo MYFIRSTNAME.PHP_EOL;

$a = 'hello';
$b = 10;
$c = 1.3;
$d = null;
$e = true;
// 型を確かめる
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
// 型変換（キャスト）
$a = (float)10;
$b = (string)1.3;
var_dump($a);
var_dump($b);

// ifでの分岐
$score=85;
if($score>=80){
    echo "Great!".PHP_EOL;
} elseif ($score >= 60) {
    echo 'Good!' . PHP_EOL;
} else {
    echo 'OK!' . PHP_EOL;
}



































//終了タグ　PHP のファイルには HTML も書けますが、 PHP のコードしか書かない場合は閉じタグを書くべきではないというルールに
?>