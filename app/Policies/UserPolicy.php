<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

  
    public function edit(User $currentuser, User $user)
    {
        return $currentuser->is($user);
    }
}
