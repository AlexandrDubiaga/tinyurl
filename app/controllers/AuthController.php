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
   )
 }
 
 
 }

?>
