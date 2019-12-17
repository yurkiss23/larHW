<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function user($userId,$user2){
//        dump($userId);
//        dump($user2);
        return View::make('user',compact('userId'))->withSecondUser($user2);
    }
}
