<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
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

    public function view(User $user, Product $product)
    {
        return false;
    }

    public function create(User $user)
    {
        return $user->role_id == 1;
    }

    public function update(User $user, Product $product)
    {
        return $user->role_id ==1 ;
    }

    public function delete(User $user)
    {
        return $user->role_id == 1;
    }
}
