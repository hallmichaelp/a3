<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyClasses\Password;

class PasswordController extends Controller
{
  public function showInput() {
    return view('password.input');
  }

  public function showOutput(Request $request) {

    $this->validate($request, [
      'password_length'=> 'required|integer|between:5,20',
      'case'=> 'required'
    ]);

     $password = new Password($request->input('password_length'), $request->input('case'), $request->has('numbers'), $request->has('special_characters'));

     return view('password.output')->with([
        'password_length'=>$password->getLength(),
        'case'=>$password->getCase(),
        'numbers'=>$password->getNumbers(),
        'special_characters'=>$password->getSpecialChars(),
        'password'=>$password->getUserPassword()
      ]);
  }
}
