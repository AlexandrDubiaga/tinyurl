<?php
namespace Tityurl\Repository;
class LinkRepository
{
    public function create($url)
    {
        $link = new Link();
        $link->url = $url;
        $link->save(); 
    }
    public function find($id)
    {
      
    }
}


?>
