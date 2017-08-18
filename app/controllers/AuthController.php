<?php
 class AuthController extends BaseController
 {
 public function getLogin()
 {
    return View::make('auth.login');
 }
  public function postLogin()
  {
    $data = array(
    'email'=> Input::get('email'),
    'password'=> Input::get('password')
   );
   if(Auth::attemp($data))
   {
    return Redirect::intended('/');
   }
    return Reredirect::to('auth/login');
 }
 
 
 }

?>
