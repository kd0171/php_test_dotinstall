<?php //declare(strict_types=1);
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


//PHPでは、'40'は自動で40に変換されてしまうが、そういった自動変換を防ぐためにdeclare文を用いる
//declare文は、スクリプトの実行に関する設定を行うためのもので、通常はスクリプトの一行目に配置
  // declare(strict_types=1)

//引数の型を指定
  //変数の前に型の指定をする（しなくてもそのまま出力してしまう）
  //returnがない場合は:voidをつける
function showInfo2(string $name, int $score): void
{
  echo $name . ': ' . $score . PHP_EOL;
}

showInfo2('taguchi', 40);
// showInfo('taguchi', 'dotinstall');
// showInfo('taguchi', '4');

//型の前に?マークを付けるとnullかその型
function getAward(?int $score): ?string
{
  //100点以上なら'Gold Medal'、それ以外ならnull
  return $score >= 100 ? 'Gold Medal' : null;
}

echo getAward(150) . PHP_EOL;
echo getAward(40) . PHP_EOL;

//配列
$scores1 = [
  90,
  40,
  100,
];

echo $scores1[1] . PHP_EOL; //40
$scores1[1] = 60;  //更新
echo $scores1[1] . PHP_EOL; //60

//キーと値を定義した配列
$scores = [
  'first'  => 90, 
  'second' => 40, 
  'third'  => 100,
];
//配列の中身の型を表示
echo "配列の型". PHP_EOL;
var_dump($scores);
//配列の中身を表示
echo "配列の中身". PHP_EOL;
print_r($scores);

echo $scores['third'] . PHP_EOL;

//$scoresという既に定義された配列から一つずつ$scoreに代入していく
foreach ($scores1 as $score) {
  echo $score . PHP_EOL;
}

//foreachはキーを用いた配列にも使用可能
foreach ($scores as $key => $score) {
  echo $key . ' - ' . $score . PHP_EOL;
}


$moreScores = [
  55,
  72,
  'perfect',
  [90, 42, 88],
];

//別の配列を配列に入れたい場合（値は入らない）
  // $scores = [
  //   90,
  //   40,
  //   $moreScores,
  //   100,
  // ];

//別の配列の中の値を配列に入れたい場合（配列$morescoresの前に...を書く）
$scores = [
  90,
  40,
  ...$moreScores,
  100,
];

//配列の中の５番目は[90, 42, 88]であるため、その配列の中のインデックスを更に指定
echo $scores[5][2] . PHP_EOL;
print_r($scores);


//可変長引数
//渡された全ての引数を配列にして$numbersに入れる

function sum_simple($a, $b, $c)
{
  return $a + $b + $c;
}

echo sum_simple(1, 3, 5) . PHP_EOL;
//引数の個数が決まっているので、最後の引数は何も処理されない（＝足されない）
  //エラーが出ないことに注意
echo sum_simple(4, 2, 5, 1) . PHP_EOL;


function sum_array1(...$numbers)
{
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return $total;
}

echo sum_array1(1, 3, 5) . PHP_EOL;
echo sum_array1(4, 2, 5, 1) . PHP_EOL;




















//終了タグ　PHP のファイルには HTML も書けますが、 PHP のコードしか書かない場合は閉じタグを書くべきではないというルールに
?>