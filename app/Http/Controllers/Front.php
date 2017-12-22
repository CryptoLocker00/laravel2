<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;

class Front extends Controller
{
    public function index(){
        return'Black Magics!';
    }
}
