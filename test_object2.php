<?php
//厳密に型をチェック（強い型付け）するので、stringに'5'ではなく5を渡すとエラーになる
// declare(strict_types=1);

class Post
{
  private string $text;
  //static：インスタンス化不要
  private static $count = 0;

  public function __construct(string $text)
  {
    $this->text = $text;
    // static がついたプロパティは self:: でアクセス
    self::$count++;
  }

  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }

//   生成したインスタンス数を数える
  public static function showInfo()
  {
    printf('Instance Count: %d' . PHP_EOL, self::$count);
  }
}

$posts = [];
// $posts[0] = new Post('hello');
$posts[0] = new Post(5); //5を渡しても自動的にStringに変える（弱い型付け）
$posts[1] = new Post('hello again');

$posts[0]->show();
$posts[1]->show();

// staticなメソッドの使用
Post::showInfo();