class indexController extends BaseController
{
  public function showIndex()
  {
    return View::make('index.index');
  }
}
