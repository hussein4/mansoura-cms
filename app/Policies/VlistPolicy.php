<?php

namespace App\Policies;
use App\User;
use App\Vlist;

use Illuminate\Auth\Access\HandlesAuthorization;

class VlistPolicy
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

    public function destroy(User $user, Vlist $vlist)
    {
        return $user->id === $vlist->user_id;
    }

    public function export(User $user, Vlist $vlist)
    {
        return $user->id === $vlist->user_id;
    }
}
