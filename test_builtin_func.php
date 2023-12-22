<?php
// PHPのビルドイン関数を調べたい時：文字列 関数 site:php.net

// 表示の幅を設定したりだとか、小数点以下の桁数を指定
$name = 'Apple';
$score = 32.246;
$info = "[$name][$score]";
echo $info . PHP_EOL;

// 文字列だったら %s 、整数だったら %d 、浮動小数点数だったら %f 
// %15s：15桁分の幅を用意、%10.2f：10 桁分だけど、小数点以下は 2 桁分
$info = sprintf("[%15s][%10.2f]", $name, $score);
echo $info . PHP_EOL;

// $info = sprintf("[%-15s][%010.2f]", $name, $score);
// echo $info . PHP_EOL;

// %-15s：左詰めにするにはマイナス記号、%010.2f：余った桁を 0 で埋めたいなら0 
printf("[%-15s][%010.2f]" . PHP_EOL, $name, $score);

// 文字列の関数
$input = ' dot_taguchi  ';

// 前後の空白、改行を除去
$input = trim($input);

// 文字数を数える
echo strlen($input) . PHP_EOL;

// 文字列の検索、見つかった位置を表示（０から開始）
echo strpos($input, '_') . PHP_EOL;

// 文字列の置換
$input = str_replace('_', '-', $input);
echo $input . PHP_EOL;

//日本語（マルチバイト文字）を使う場合
$input = ' こんにちは  ';
$input = trim($input);

// マルチバイト用のカウント
echo mb_strlen($input) . PHP_EOL; // 5

// マルチバイト用の検索
echo mb_strpos($input, 'に') . PHP_EOL; // 2

// UTF-8であれば置換可能
$input = str_replace('にち', 'ばん', $input); // こんばんは
echo $input . PHP_EOL;



// 固定長データ
// substr(文字列,位置,桁数)：文字列のこの位置からこの桁数分切り出す
// substr_replace(文字列,置換文字列,位置,桁数)：文字列のこの位置からこの桁数分置換する
$input = '20200320Item-A  1200';

$date = substr($input, 0, 8);
echo 'date: '.$date . PHP_EOL;

$product = substr($input, 8, 8);
echo 'product: '.$product . PHP_EOL;



//8文字目から8文字分置換する：$input の一部を 'Item-B ' に変える
$input = substr_replace($input, 'Item-B  ', 8, 8);
echo 'input: '.$input . PHP_EOL;

// $amount = substr($input, 16, 4);
// 最後までの場合は桁数の部分は省略可能
$amount = substr($input, 16);
// 3 桁ごとにカンマを入れたい場合
echo 'amount: '.number_format($amount) . PHP_EOL;


// 文字列の検索、置換

$input = 'Call us at 03-3001-1256 or 03-3015-3222';
$pattern = '/\d{2}-\d{4}-\d{4}/';
// preg_match() は最初に見つかった結果だけ
preg_match($pattern, $input, $matches);
print_r($matches);
// 全ての見つかった結果を格納したい場合
preg_match_all($pattern, $input, $matches);
print_r($matches);

// preg_replace(文字列の中の対象となるパターン,置換後の文字列, 対象となる文字列);
$input = preg_replace($pattern, '**-****-****', $input);
echo $input . PHP_EOL;




























