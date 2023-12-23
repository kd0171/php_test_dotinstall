<?php

class Post // 親クラス Superクラス
{
// クラスを継承したとしても、親クラスでprivate にしているプロパティは子クラスでは使えない
protected $text;

  public function __construct($text)
  {
    $this->text = $text;
  }

//   final public function show()　オーバーライドしてほしくないメソッドにはfinal
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

        // override
    public function show()
    {
        printf('%s by %s' . PHP_EOL, $this->text, $this->sponsor);
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







