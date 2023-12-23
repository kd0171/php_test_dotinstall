<?php


echo "投稿データ作成：　". PHP_EOL;
$postsalt = [];
$postsalt[0] = ['text' => 'hello', 'likes' => 0];
$postsalt[1] = ['text' => 'hello again', 'likes' => 0];

print_r($postsalt);

function show($postsalt)
{
// 最初の%sは文字列(=$post['text'])、次の%dは整数(=$post['likes'])
  printf('%s (%d)' . PHP_EOL, $postsalt['text'], $postsalt['likes']);
}

show($postsalt[0]);
show($postsalt[1]);


// クラス
class Post
{
  // プロパティ
  private $text;
  private $likes = 0; // クラスの外からはアクセスできない


  // コンストラクタ
//   public function __construct($text, $likes) プロパティで初期化
  public function __construct($text)
  {
    $this->text = $text;
    // $this->likes = $likes;
  }

  // メソッド
  public function show()
  {
    // クラス内の変数へのアクセスは$this->変数のように書く
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }

  public function like()
  {
    $this->likes++;
    
    if ($this->likes > 100) {
      $this->likes = 100;
    }
  }

}

$posts = [];
// $posts[0] = ['text' => 'hello', 'likes' => 0];
// $posts[0] = new Post('hello', 0);
$posts[0] = new Post('hello');  //0の部分は初期化
/*  コンストラクタを用いて直接代入できるように書き換え 
    $posts[0]->text = 'hello';
    $posts[0]->likes = 0;
*/
// $posts[1] = ['text' => 'hello again', 'likes' => 0];
// $posts[1] = new Post('hello again', 0);
$posts[1] = new Post('hello again');  //0の部分は初期化
/*  コンストラクタを用いて直接代入できるように書き換え 
    $posts[1]->text = 'hello again';
    $posts[1]->likes = 0;
*/
// show($posts[0]);
// show($posts[1]);

// $posts[0]->likes++;
// $posts[0]->likes = -100; // アクセス修飾子はprivateなので変更できない

$posts[0]->show();

// likeメソッドを用いる
$posts[0]->like();
$posts[0]->show();

$posts[1]->show();



































