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
    $shortUrl = URL::to('/',array($link->id));
    return  View::make('index.link',array('link'=>$shortUrl));
   
  }
   public function getRedirect($id)
   {
      $link = Link::find($id);
      $url = $link->url;
      return Redirect::to($url);
   }
}
?>
