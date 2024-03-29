<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{

    public function index()
    {

        return view('t_home', [
            'tweets' => auth()->user()->timeline()
        ]);
    }
    public function store()
    {
        $bodyattributes = request()->validate(['body' => 'required|max:255']);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $bodyattributes['body'],
        ]);

        return redirect('/tweety');
    }
}
