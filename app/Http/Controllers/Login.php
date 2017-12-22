<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class Login extends Controller
{
    public function index(){
        return '';
    }

    public function showlogin(){
        return view ('login');
    }

    public function doLogin(){
        $rules = array(
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()){
            return Redirect::to('login')
                -withErrors($validator);
        }
        else{
            $userdata = array(
                'eamil' => Input::get('email'),
                'password' => Input::get('password'),
            );

            if(Auth::attempt($userdata)){
                echo'YAYNESS!!!';
            }
            else{
                return Redirect::to('login');
            }
        }
    }
}
