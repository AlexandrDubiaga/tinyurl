<?php
namespace Tinyurl\Repository;
use IlLuminate\Support\ServiceProvider;
class TinyurlRepositoryProvider extends ServiceProvider
{
  public function register()
  {
    $this->app->bind('Tinyurl\Repository\Link\LinkRepositoryInterface','Tinyurl\Repository\Link\DbLinkRepository');
  }
}


?>
