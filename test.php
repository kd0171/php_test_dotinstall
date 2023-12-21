
<?php
//開始タグ


// コメントアウト　行頭：　//  #  複数行： /* */    ショートカット：ctrl+/

// 変数の使い方
$name = 'taguchi';

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

//if文の条件に値を入れても真偽判定
    //falseとなるもの：false,+0,-0,'0','',null,[]
    //trueとなるもの：0でない数字、空でない文字列、空でない配列
$x = +0;
if($x){
    echo "Great!".PHP_EOL;
} elseif ($score >= 60) {
    echo 'Good!' . PHP_EOL;
}

//文字列のイコールは===
if ($score >= 50) {
  if ($name === 'taguchi') {
    echo 'Good Job!' . PHP_EOL;
  }
}

// && and なおかつ
// || or もしくは
// ! 〜ではない

if ($score >= 50 && $name === 'taguchi') {
    echo 'Good Job!' . PHP_EOL;
  }


// $signal = 'red';
$signal = 'blue';

//if文で複数の文字列を判別する
if ($signal === 'red') {
  echo 'Stop!' . PHP_EOL;
} elseif ($signal === 'yellow') {
  echo 'Caution!' . PHP_EOL;
} elseif ($signal === 'blue'){
  echo 'Go!' . PHP_EOL;
}


//if文で複数の文字列を判別する場合switch文
switch ($signal) {
    case 'red':
      echo 'Stop!' . PHP_EOL;
      break;
    case 'yellow':
      echo 'Caution!' . PHP_EOL;
      break;
    case 'blue':
      echo 'Go!' . PHP_EOL;
      break;
  }



//switch文
  switch ($signal) {
    case 'red':
      echo 'Stop!' . PHP_EOL;
//break;を書き忘れるとyellowの処理も行われてしまう
      break;
    case 'yellow':
      echo 'Caution!' . PHP_EOL;
      break;
//switch文でAもしくはBとしたい場合はcaseを複数並べる
    case 'blue':
    case 'green':
      echo 'Go!' . PHP_EOL;
      break;
//switch文で何も当てはまらない場合の処理
    default:
      echo 'Wrong signal!!' . PHP_EOL;
      break;
  }


// for文の使い方
for ($i = 1; $i <= 5; $i++) {
    // echo 'Hello' . PHP_EOL;
    echo "$i - Hello," . PHP_EOL;
  }


// while文の使い方
$hp1 = 100;

while ($hp1 > 0) {
  echo "Your HP1: $hp1" . PHP_EOL;
  $hp1 -= 15;
}

$hp = -50;
// do-while文の使い方：一回必ず実行してその後
do {
  echo "Your HP: $hp" . PHP_EOL;
  $hp -= 15;
} while ($hp > 0);

//continue, breakの使い方
for ($i = 1; $i <= 10; $i++) {
  //continueはある条件を満たしたときのfor文の処理のスキップ
  if ($i === 4) {
    continue;
  }
  echo $i . PHP_EOL;
}

for ($i = 1; $i <= 10; $i++) {
  //breakはある条件を満たしたときのfor文の処理の残りの処理全てのスキップ（＝処理の中断）
  if ($i === 4) {
    break;
  }
  echo $i . PHP_EOL;
}

//関数
function showAd() 
{
  echo '----------' . PHP_EOL;
  echo '--- Ad ---' . PHP_EOL;
  echo '----------' . PHP_EOL;
}
//関数の後の();を忘れない
showAd();
echo 'Tom is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
showAd();
echo 'Steve is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
showAd();

//引数を渡し忘れた場合：='Ad'はデフォルト値
function showAds($message = 'Ad')  // 仮引数
{
  echo '----------' . PHP_EOL;
  // 文字列の連結はピリオド
  echo '--- ' . $message . ' ---' . PHP_EOL;
  echo '----------' . PHP_EOL;
}

showAds('Header Ad'); // 実引数
echo 'Tom is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
showAds('Ad');
showAds();
echo 'Steve is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
showAds('Footer Ad');

// 戻り値を含む関数
function sum($a, $b, $c)
{
  echo $a + $b + $c . PHP_EOL;
  return $a + $b + $c;
  // returnで処理が終わるのでその後の処理は行われない
  echo 'ここは表示されません' . PHP_EOL;
}

sum(100, 200, 300); // 600
sum(300, 400, 500); // 1200

echo sum(100, 200, 300) + sum(300, 400, 500) . PHP_EOL; // 1800

// グローバルスコープ
//関数の外で定義された変数は基本的には使えない
$rate = 1.1;
function sumrate_global($a, $b, $c)
{
  // globalとして定義すれば関数外の変数も使えるようになる
  // しかし、コードが長いとどこで定義されたのかもわかりにくくなるので、基本「引数」または「ローカルで定義」
  global $rate;
  return ($a + $b + $c) * $rate;
}

$rate = 1.1;
function sumrate_local($a, $b, $c)
{
  $rate = 1.08; // ローカルスコープ
  return ($a + $b + $c) * $rate;
  // 最後にセミコロンは不要
}

echo sumrate_global(100, 200, 300) + sumrate_global(300, 400, 500) . PHP_EOL; // 1944
echo sumrate_local(100, 200, 300) + sumrate_local(300, 400, 500) . PHP_EOL; // 1944


// 関数を値に代入する
$sumfunc = function ($a, $b, $c) { // 無名関数（クロージャー）
  return $a + $b + $c;
  // 関数を代入すると最後にセミコロン必要
};

echo $sumfunc(100, 300, 500) . PHP_EOL;


//条件演算子
function sum_conditonal1($a, $b, $c) 
{
  $total = $a + $b + $c;
  if ($total < 0) {
    return 0;
  } else {
    return $total;
  }
}
// 条件演算子を用いたreturnの書き方
function sum_conditonal2($a, $b, $c) 
{
  $total = $a + $b + $c;
  //?の前の条件「$total < 0」がtrueならば、?から:までreturnで返す
  //falseの場合は、:の後の値を返す
  return $total < 0 ? 0 : $total;
}
echo sum_conditonal1(100, 300, 500) . PHP_EOL; // 900
echo sum_conditonal2(-1000, 300, 500) . PHP_EOL; // 0








































//終了タグ　PHP のファイルには HTML も書けますが、 PHP のコードしか書かない場合は閉じタグを書くべきではないというルールに
?>