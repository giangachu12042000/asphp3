<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class CommentPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Category $category)
    {
        return true;
    }

    public function create(User $user)
    {
        return $user->role_id == 1;
    }

    public function update(User $user, Comment $comment)
    {
        return $user->role_id ==1 ;
    }

    public function delete(User $user)
    {
        return $user->role_id == 1;
    }
}
