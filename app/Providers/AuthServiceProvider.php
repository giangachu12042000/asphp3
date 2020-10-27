<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Policies\CommentPolicy;
use App\Policies\ProductPolicy;
use App\Policies\CategoryPolicy;
use App\Policies\UserPolicy;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'Comment' => 'CommentPolicy',
        'Product' => 'ProductPolicy',
        'Category'  => 'CategoryPolicy',
        'User' => 'UserPolicy' 
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
