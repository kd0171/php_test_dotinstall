<?php
// インターフェイス：PHPでは複数の親クラスを持つことはできないので、抽象メソッドからなるインターフェイスを用いる（継承関係は不要）
interface LikeInterface
{
  public function like();
}


abstract class BasePost
{
    // クラスを継承したとしても、親クラスでprivate にしているプロパティは子クラスでは使えない
    protected $text;

    public function __construct($text)
    {
      $this->text = $text;
    }
// 必ず子クラスで定義しなければならないメソッド
  abstract public function show();
}

class Post extends BasePost  implements LikeInterface// 親クラス Superクラス
{
    private $likes = 0;

    public function like()
    {
        $this->likes++;
    }
  
//   final public function show()　オーバーライドしてほしくないメソッドにはfinal
    public function show()
    {
        printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
    }
}

// class SponsoredPost extends Post // 子クラス Subクラス
class SponsoredPost extends BasePost
{
    // 子クラスの独自のプロパティ
    private $sponsor;
    
    public function __construct($text, $sponsor)
    {
    // 親クラスのコンストラクタを使う
      parent::__construct($text);
      $this->sponsor = $sponsor;
    }
    
    // public function showSponsor()
    // {
    //   printf('%s' . PHP_EOL, $this->sponsor);
    // }

        // override
    public function show()
    {
        printf('%s by %s' . PHP_EOL, $this->text, $this->sponsor);
    }
  }



class PremiumPost extends BasePost implements LikeInterface
{
  private $price;
  private $likes = 0;
  
  public function like()
  {
    $this->likes++;
  }

  public function __construct($text, $price)
  {
    parent::__construct($text);
    $this->price = $price;
  }

  public function show()
  {
    printf('%s (%d) [%d JPY]' . PHP_EOL, $this->text, $this->likes, $this->price);
  }
}


$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');
$posts[2] = new SponsoredPost('Sub: hello hello', 'dotinstall');
$posts[3] = new PremiumPost('hello there', 300);

$posts[0]->like();
$posts[3]->like();

// SponsoredPost クラスは Post クラスを継承したので Post 型としても扱える
function processPost(BasePost $post)
{
  $post->show();
}

foreach ($posts as $post) {
    processPost($post);
}

// $posts[0]->show();
// $posts[1]->show();
// $posts[2]->show();
// $posts[2]->showSponsor();







