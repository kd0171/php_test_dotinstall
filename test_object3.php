<?php

class Post // 親クラス Superクラス
{
  private $text;

  public function __construct($text)
  {
    $this->text = $text;
  }

  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
}

class SponsoredPost extends Post // 子クラス Subクラス
{
  
}

$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');
$posts[2] = new SponsoredPost('Sub: hello hello');

$posts[0]->show();
$posts[1]->show();
$posts[2]->show();