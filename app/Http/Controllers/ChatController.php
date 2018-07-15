<?php

namespace App\Http\Controllers;

use App\admin;
use App\Notifications\TaskCompleted;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function Chat(Request $request){

        return view('Chat');

    }

    public function messages(Request $request){

        $request->input('message');

        $admin= new admin();
        $admin->notify(new TaskCompleted($request));
        return view('Chat');





    }

}
