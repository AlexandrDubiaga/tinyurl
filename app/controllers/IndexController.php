class IndexController extends BaseController
{
  public function showIndex()
  {
    return View::make('index.index');
  }
 public function posturl()
  {
    $url = Input::get('url');
  }
}
