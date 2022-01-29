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
        $this->saveToSession($request);
        event(new chatEvent($request->message,$user));
    }

    public function saveToSession(request $request)
    {
        session()->put('chat',$request->chat);
    }

    public function getOldMessage()
    {
       return session('chat');

    }

   public function deleteSession()
   {
        return session()->forget('chat');
   }

}
