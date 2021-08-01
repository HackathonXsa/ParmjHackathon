<?php

namespace App\Policies;

use App\Models\Hackathon;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HackathonPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function view(User $user, Hackathon $hackathon)
    {
        //
        return $user->id === $hackathon->user_id;
    }

    public function create(User $user)
    {
        //
        return $user->is($user);
    }

    public function update(User $user, Hackathon $hackathon)
    {
        //
        return $user->id === $hackathon->user_id;

    }
    public function delete(User $user, Hackathon $hackathon)
    {
        //
        return $user->id === $hackathon->user_id;
    }

}
