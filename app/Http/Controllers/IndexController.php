<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use App\Events\noti;


class IndexController extends Controller
{
    public function index (){
       return view('client.index');
    }
}
