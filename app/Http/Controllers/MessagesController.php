<?php

namespace App\Http\Controllers;
use App\User;
// use App\Tweet;
use App\Message;
// use App\Jobs\NewJob;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        return view('t_project.t_chat_list');
    }

    public function sendMessage(Request $request)
    {
        $chat = new Message;
        $chat->from_user = auth()->user()->id;
        $chat->to_user = $request->to_user;
        $chat->content = $request->content;
        $chat->save();
        // NewJob::dispatch();
        return redirect()->back();
    }

    public function getMessageHistory(Request $request)
    {
        $from_user = auth()->user()->id;
        $to_user = $request->to_user;
 
       $chater_name=User::where('id', '=' ,$to_user)->get();
    //    dd($chater_name);
        
        $messages = Message::where(function ($query) use ($from_user, $to_user) {
            $query->where('from_user', $from_user)->where('to_user', $to_user);
        })->orWhere(function ($query) use ($from_user, $to_user) {
            $query->where('from_user', $to_user)->where('to_user', $from_user);
        })->orderBy('created_at', 'asc')->get();

        return view('t_project.t_chat', compact('messages', 'to_user', 'chater_name'));
    }
    public function __invoke()
    {
        return view('t_project.t_chat_list');

       
    }
}