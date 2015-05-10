<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller {


    public function __construct()
    {
        $this->middleware('guest');
    }


    public function getLogin()
    {
        return view('login');
    }
public function postLogin(){
    $rules=array('username'=>'required','password' => 'required');
    $validator=Validator::make(input::all(),$rules);

    if($validator->failes()){
        return Redirect::route('login')->withErrors($validator);
    }

$auth= Auth.attempt(array(
        'name' => input::get('username'),
        'password' => input::get('password'),
    ), false);
    if(!$auth){
        return Redirect::route('login')->withErrors(array(
            'Invalid'
        ));
    }
return Redirect::route('home');


    }


}
