<?php
namespace Tinyurl\Repository;
use Illuminate\Support\ServiceProvider;



class TinyurlRepositoryProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind('Tinyurl\Repository\Link\DbLinkRepository', function(){
			return new \Tinyurl\Repository\Link\DbLinkRepository(new \Link);
		});

		$this->app->bind('\Tinyurl\Repository\Link\LinkRepositoryInterface', '\Tinyurl\Repository\Link\ShortLinkRepository');
	}
}
