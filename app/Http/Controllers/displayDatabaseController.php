<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\displayDatabaseModel;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;
//use App\Http\Controllers\displayDatabaseModel;
use App\Model\displayDatabaseModel;


class displayDatabaseController extends Controller
{
    public function index(){
        $name = displayDatabaseController::get();
        //return 'user database';
        //$table = View::table('users')->get();

        return View('displayDatabaseController.displayDatabase') -> with ('name', $name);

    }
}
