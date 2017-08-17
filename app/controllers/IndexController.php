<?php
class IndexController extends BaseController
{
  public function showIndex()
  {
    return View::make('index.index');
  }
 public function postUrl()
  {
    $url = Input::get('url');
    $link = new Link();
    $link->url = $url;
    $link->save();
    return  View::make('index.link');
   
  }
}
?>
