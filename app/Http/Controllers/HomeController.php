<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        
        $Users = User::get();

        return view('home',['users'=> $Users]);
    }
}
