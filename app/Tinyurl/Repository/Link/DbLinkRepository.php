<?php
namespace Tinyurl\Repository\Link;
class DbLinkRepository implements LinkRepositoryInterface
{
    public function create($url)
    {
        $link = new \Link();
        $link->url = $url;
        $link->save(); 
        return $link->id;
    }
    public function find($id)
    {
      $link = \Link::find($id);
        if(!$link)
        {
            return null;
        }
        return $link->url;
    }
}



?>
