
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

//終了タグ　PHP のファイルには HTML も書けますが、 PHP のコードしか書かない場合は閉じタグを書くべきではないというルールに
?>