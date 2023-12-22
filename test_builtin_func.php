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



// 文字列と配列を相互に変換
$d = [2020, 11, 15];
//echo "$d[0]-$d[1]-$d[2]" . PHP_EOL;
// implode(区切り文字, 文字列)
echo "implode: ".implode('-', $d) . PHP_EOL;

$t = '17:32:45';
// explode(区切り文字, 文字列)
print_r(explode(':', $t));



// 数学関連の関数
$n = 5.6283;

// 小数点以下を切り上げる
echo ceil($n) . PHP_EOL; // 6
// 小数点以下を切り捨てる
echo floor($n) . PHP_EOL; // 5
// 四捨五入して整数
echo round($n) . PHP_EOL; // 6
// 小数点以下二桁になるように四捨五入
echo round($n, 2) . PHP_EOL; // 5.63
// 乱数を作る：1 以上 6 以下のランダムな整数値
echo mt_rand(1, 6) . PHP_EOL;
// 最大値を求める
echo max(3, 9, 4) .PHP_EOL;
// 最小値を求める
echo min(3, 9, 4) .PHP_EOL;
// 円周率
echo M_PI . PHP_EOL;
// ２の平方根
echo M_SQRT2 . PHP_EOL;


$scores = [30, 40, 50];
// 先頭に要素を追加
array_unshift($scores, 10, 20);
print_r($scores);

// 末尾に追加
array_push($scores, 60, 70);
print_r($scores);

// ひとつだけの要素を末尾に追加するには添字なしで値を代入する方法
$scores[] = 80;
print_r($scores);

// 先頭から要素を削除
array_shift($scores);
print_r($scores);

// 末尾から要素を削除
array_pop($scores);
print_r($scores);


// 配列の一部を切り出す
// array_slice(配列,インデックス,個数)
$scores = [30, 40, 50, 60, 70];
$partial1 = array_slice($scores, 2, 3);
// 最後までなら引数省略可能
$partial2 = array_slice($scores, 2);
// 位置の指定はマイナスの値で末尾から数えて（インデックスではなく個数）
$partial3 = array_slice($scores, -2);

print_r($scores);
print_r($partial1);
print_r($partial2);
print_r($partial3);


// 配列の要素を削除、置換
// array_splice(配列,インデックス,個数)
$scores1 = [30, 40, 50, 60, 70, 80];
$scores2 = [30, 40, 50, 60, 70, 80];
$scores3 = [30, 40, 50, 60, 70, 80];

print_r($scores1);
// インデックス２から３つ削除
array_splice($scores1, 2, 3);
print_r($scores1);

print_r($scores2);
// インデックス２から３つ削除し、同じ位置に100を入れる
array_splice($scores2, 2, 3, 100);
print_r($scores2);

print_r($scores3);
// 複数の要素を入れたい場合は配列の形、個数０だとインデックスの後に挿入
array_splice($scores3, 2, 0, [100, 101]);
print_r($scores3);




// 配列のソート、シャッフル、ランダムに要素を取り出す
$scores = [40, 50, 20, 30];
// 値を小さい順に並び替え
sort($scores);
print_r($scores);

// 値を大きい順に並び替え
rsort($scores);
print_r($scores);

// 実行するたびに値をシャッフル
shuffle($scores);
print_r($scores);

// ランダムに要素を取得。元配列は無変更新しい配列をインデックス同士のキー形式で返す
    // キー形式：Array ( [0] => 0 [1] => 3 )：picked[1]は3を返し、それがscoresのインデックスとして機能
$scores = [40, 50, 20, 30];    
$picked = array_rand($scores, 2);
print_r($picked);
echo $scores[$picked[0]] . PHP_EOL;
echo $scores[$picked[1]] . PHP_EOL;



// 配列の値を集計
// 0 のインデックスから 5 個分を 10 の値で埋める（１０が５個並んだ配列）
$scores = array_fill(0, 5, 10);
print_r($scores);

// 1 から 10 までの値を使って配列を作る
$scores = range(1, 10);
print_r($scores);

// 1 から 10 までだけど 2 刻み
$scores = range(1, 10, 2);
print_r($scores);

// 配列の要素の合計
echo array_sum($scores) . PHP_EOL;

echo max($scores) . PHP_EOL;
echo min($scores) . PHP_EOL;

// 要素数：count()
echo array_sum($scores) / count($scores) . PHP_EOL;


// 配列同士の演算
echo "配列同士の演算：　". PHP_EOL;
$a = [3, 4, 8];
$b = [4, 8, 12];

// array_merge(配列A,配列B)：Aの後にBに連結
$merged1 = array_merge($a, $b); //[3,4,8,4,8,12]
$merged2 = [...$a, ...$b];
print_r($merged1);
print_r($merged2);


// array_unique(配列A,配列B)：重複した値を取り除く関数
$uniques = array_unique($merged1); //[3,4,8,12]
print_r($uniques);


// array_diff(配列A,配列B)):AからBにある要素を引く
$diff1 = array_diff($a, $b); //[3]　Array ( [0] => 3 )　左側の配列のインデックスは継承されることに注意
print_r($diff1); // [3]
$diff2 = array_diff($b, $a); //[12]　Array ( [2] => 12 )　左側の配列のインデックスは継承されることに注意
print_r($diff2); // [12]

// array_intersect(配列A,配列B))：共通の要素を取り出す
$common = array_intersect($a, $b); //[4,8]　Array ( [1] => 4 [2] => 8 )　左側の配列のインデックスは継承されることに注意
print_r($common);


// 配列のすべての要素に関数を適用して新しい配列を返す
// array_map(関数,配列)
echo "配列全体への関数の適用：　". PHP_EOL;
$prices = [100, 200, 300];

$newPrices = array_map(
  // function ($n) { return $n * 1.1; },　無名関数
  fn($n) => $n * 1.1,   //アロー関数
  $prices
);

print_r($newPrices);




// 配列内をフィルタリングして、新しい配列を返す
    // 復習：1 から 10 までの値を使って配列を作る
$numbers = range(1, 10);

$evenNumbers = array_filter(
  $numbers,
//  function ($n) {
        //    if ($n % 2 === 0) {
        //      return true;
        //    } else {
        //      return false;
        //    }
//    return $n % 2 === 0;  //trueの時にtrueを返し、falseの時にfalseを返すだけなので、returnだけでも大丈夫
//  }
  fn($n) => $n % 2 === 0
);

print_r($evenNumbers);


// 配列のキーや値を操作
echo " 配列のキーや値を操作：　". PHP_EOL;
$scores = [
    'taguchi' => 80,
    'hayashi' => 70,
    'kikuchi' => 60,
  ];
  
// キーを取り出す
  $keys = array_keys($scores);
  print_r($keys);
// 値を取り出す
  $values = array_values(($scores));
  print_r($values);
  
//   特定のキーがあるかどうか
  if (array_key_exists('taguchi', $scores) === true) {
    echo 'taguchi is here!' . PHP_EOL;
  }
//   値が配列の中にあるかどうか
  if (in_array(80, $scores) === true) {
    echo '80 is here!' . PHP_EOL;
  }

//   値を検索して、対応するキーを返す
  echo array_search(70, $scores) . PHP_EOL;


// キーを保持したまま値でソート
  echo "キーを保持したまま値でソート：　". PHP_EOL;
  $scores = [
    'taguchi' => 80,
    'hayashi' => 70,
    'kikuchi' => 60,
  ];
  
  sort($scores);
  print_r($scores); //Array ( [0] => 60 [1] => 70 [2] => 80 ) 
  rsort($scores);
  print_r($scores); //Array ( [0] => 80 [1] => 70 [2] => 60 )
  
  $scores = [
    'taguchi' => 80,
    'hayashi' => 70,
    'kikuchi' => 60,
  ];
  asort($scores);
  print_r($scores); // Array ( [kikuchi] => 60 [hayashi] => 70 [taguchi] => 80 )
  arsort($scores);
  print_r($scores); // Array ( [taguchi] => 80 [hayashi] => 70 [kikuchi] => 60 )
  
//   キーのほうでソートしたい
$scores = [
    'taguchi' => 80,
    'hayashi' => 70,
    'kikuchi' => 60,
  ];
  ksort($scores);
  print_r($scores); // Array ( [hayashi] => 70 [kikuchi] => 60 [taguchi] => 80 )
  krsort($scores);
  print_r($scores); // Array ( [taguchi] => 80 [kikuchi] => 60 [hayashi] => 70 ) 



// ユーザー定義の比較関数を使用して、配列をソートする方法
 echo "ユーザー定義の比較関数によるソート：　". PHP_EOL;
// $scores = [
//   'taguchi' => 80,
//   'hayashi' => 70,
//   'kikuchi' => 60,
// ];

$data = [
    ['name' => 'taguchi', 'score' => 80],
    ['name' => 'kikuchi', 'score' => 60],
    ['name' => 'hayashi', 'score' => 70],
    ['name' => 'tamachi', 'score' => 60],
  ];
  
  //usort() では実はひとつの項目しか比較できない：score が同じだったら名前のほうもアルファベット順やその逆順に並べたかった場合は他の方法
  usort(
    $data,
    function ($a, $b) {
      if ($a['score'] === $b['score']) {
        return 0;   //ふたつの値が同じで、順番を変えたくないときは 0 を返しなさい
      }
      return $a['score'] > $b['score'] ? 1 : -1; // 条件を満たすと1 、そうじゃなかったら -1 
    }
  );
        // 負の整数（例: -1）を返すと、$a を $b よりも前に配置する（昇順ソート）。
        // 0を返すと、$a と $b は等しいと見なされ、順番は変わりません。
        // 正の整数（例: 1）を返すと、$a を $b よりも後ろに配置する（昇順ソート）。

  print_r($data);




  echo "ある配列の中の複数の配列を同時にソート：　". PHP_EOL;
//   array_multisort(配列A,配列B,配列C)：ソート後に別の配列で同じ値を含むものの中でソートする

$data = [
    ['name' => 'taguchi', 'score' => 80],
    ['name' => 'kikuchi', 'score' => 60],
    ['name' => 'hayashi', 'score' => 70],
    ['name' => 'tamachi', 'score' => 60],
  ];
  
//   データからscoreのカラムの値だけを取る
  $scores = array_column($data, 'score'); 
//   データからnameのカラムの値だけを取る
  $names = array_column($data, 'name');
  
  print_r($scores);
  print_r($names);
  
//   デフォルト：小さい順、アルファベット順
  array_multisort(
    $scores,
    $names,
    $data
  );
  print_r($data);

// 指定の順番を追加（並べ方とデータ型）
  array_multisort(
    $scores, SORT_DESC, SORT_NUMERIC, // 大きい順で数値
    $names, SORT_DESC, SORT_STRING, // アルファベットの逆順で文字列
    $data
  );
  print_r($data);


  echo "ファイルを開いて文字列を書き込む：　". PHP_EOL;
//   ファイルポインタを介してファイル操作を行う
// 　書き込みモードにするには write の w
  $fp = fopen('names.txt', 'w');
//   ファイルポインタと書き込みたい値を渡す
//   UNIX 環境での改行は \n で表現
  fwrite($fp, "taro\n");
//   書き込みを終了するには fclose() 関数にファイルポインタを渡す
  fclose($fp);

//   cat で中身を確かめられる

  echo "テキストに追記：　". PHP_EOL;
//   fopen()で開いたファイルに文字列を追記していく方法を見ていきます。
//   書き込みモードは append を意味する a
$fp = fopen('names.txt', 'a');

fwrite($fp, "jiro\n");
fwrite($fp, "saburo\n");
fclose($fp);
// ファイルはプログラムの実行が終わると自動的にクローズされるので、このあとにファイル操作がなければ、実は書かなくても OK 



  echo "ファイルから読み込む処理：　". PHP_EOL;
//   書き込みモードは read を意味する r
$fp = fopen('names.txt', 'r');
// ファイルサイズを調べるには filesize 関数を使う
// fread(ファイルポインター, ファイルサイズ)
$contents = fread($fp, filesize('names.txt'));
fclose($fp);
echo $contents;


$fp = fopen('names.txt', 'r');
// while() を使って読み込むものがなくならない限りを表す：!== false
while (($line = fgets($fp)) !== false) {
  echo $line;
}
fclose($fp);



  echo "：　". PHP_EOL;
  echo "：　". PHP_EOL;
  echo "：　". PHP_EOL;
  echo "：　". PHP_EOL;

