<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\User;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('t_project.t_profileshow', [
            'user' => $user,
            'tweets' => $user->tweets()->WithLikes()->paginate(100),
        ]);
    }

    public function edit(User $user)
    {

        return view('t_project.t_profileEdit', compact('user'));
    }

    public function update(User $user)
    {
        //    dd(request('userpic'));

        $attributes = request()->validate([
            'username' => ['string', 'required', 'max:255', Rule::unique('users')->ignore($user)],
            'name' => ['string', 'required', 'max:255'],
            'userdesc' => ['string', 'max:255'],
            'userpic' => ['file'],
            'userbgpic' => ['file'],
            'email' => ['string', 'required', 'email', 'max:255',  Rule::unique('users')->ignore($user)],
            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed'],

        ]);

        if (request('userpic')) {
            $attributes['userpic'] = request('userpic')->store('userpics');
        }
        if (request('userbgpic')) {
            $attributes['userbgpic'] = request('userbgpic')->store('userbgpics');
        }

        $user->update($attributes);

        return redirect($user->path());
    }
}
