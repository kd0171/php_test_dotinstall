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


