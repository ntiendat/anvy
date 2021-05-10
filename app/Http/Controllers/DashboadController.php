<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use App\InfoUser;
use App\Events\noti;


class DashboadController extends Controller
{
    public function index (){
        $infoUser = InfoUser::all();
       return view('admin.index', compact('infoUser'));
    }
    public function getdata (){
        $infoUser = InfoUser::all();
       return response()->json($infoUser);
    }

    public function insert (Request $request){

        $infoUser = new InfoUser();
        $infoUser ->name = $request->name;
        $infoUser ->phone_number = $request->phone_number;
        $infoUser ->address = $request->address;
        $infoUser ->note = $request->note;
        $infoUser -> save ();
        event(new noti($request->name,$request->phone_number,$request->address,$request->note));
        return response()->json($infoUser);

     }
}

