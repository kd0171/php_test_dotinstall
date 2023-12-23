<?php
//厳密に型をチェックするので、stringに'5'ではなく5を渡すとエラーになる
// declare(strict_types=1);

class Post
{
  private string $text;

  public function __construct(string $text)
  {
    $this->text = $text;
  }

  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
}

$posts = [];
// $posts[0] = new Post('hello');
$posts[0] = new Post(5); //5を渡しても自動的にStringに変える
$posts[1] = new Post('hello again');

$posts[0]->show();
$posts[1]->show();