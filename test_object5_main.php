<?php

require('test_object5_Post.php'); // 処理が止まる
// include('Post.php'); // 処理が止まらない
// onceを付けるとこちらのファイルが既に読み込まれていたら、スキップ
// require_once('Post.php');
// include_once('Post.php');
    // 親ディレクトリにある場合:
    // require('../Post.php');
    // 別のディレクトリにある場合:
    // require('/path/to/Post.php');

$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');

foreach ($posts as $post) {
  $post->show();
}