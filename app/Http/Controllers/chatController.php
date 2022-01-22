<?php

namespace App\Http\Controllers;

use App\Events\chatEvent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class chatController extends Controller
{
    public function chat()
    {
        return view('chat');
    }

    public function send(request $request)
    {

        
        $user= User::find(Auth::id());


        event(new chatEvent($request->message,$user));
    }

    // public function send(Request $request)
    // {
    //     $user= User::find(Auth::id());

    //     $message=  $request->all();

    //     event(new chatEvent($message,$user));
    // }

}
