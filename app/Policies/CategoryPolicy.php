<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Category;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
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

    public function update(User $user, Category $category)
    {
        return $user->role_id ==1 ;
    }

    public function delete(User $user)
    {
        return $user->role_id == 1;
    }
}
