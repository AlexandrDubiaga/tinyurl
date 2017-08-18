<?php
namespace Tinyurl\Repository;
use Illuminate\Support\ServiceProvider;
class TinyurlRepositoryProvider extends ServiceProvider
{
  public function register()
  {
    $this->app->bind('Tinyurl\Repository\Link\LinkRepositoryInterface', function(){ return new \Tinyurl\Repository\Link\DbLinkRepository(new\Link);    });
  }
}


?>
