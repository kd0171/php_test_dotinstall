<?php

echo "投稿データ作成：　". PHP_EOL;
$posts = [];
$posts[0] = ['text' => 'hello', 'likes' => 0];
$posts[1] = ['text' => 'hello again', 'likes' => 0];

print_r($posts);

function show($post)
{
// 最初の%sは文字列(=$post['text'])、次の%dは整数(=$post['likes'])
  printf('%s (%d)' . PHP_EOL, $post['text'], $post['likes']);
}

show($posts[0]);
show($posts[1]);

























