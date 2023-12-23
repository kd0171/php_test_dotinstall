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
    // 子クラスの独自のプロパティ
    private $sponsor;
    
    public function __construct($text, $sponsor)
    {
    // 親クラスのコンストラクタを使う
      parent::__construct($text);
      $this->sponsor = $sponsor;
    }
    
    public function showSponsor()
    {
      printf('%s' . PHP_EOL, $this->sponsor);
    }
  }

$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');
$posts[2] = new SponsoredPost('Sub: hello hello', 'dotinstall');

$posts[0]->show();
$posts[1]->show();
$posts[2]->show();
$posts[2]->showSponsor();







