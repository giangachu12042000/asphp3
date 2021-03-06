<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use\App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Comment;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(10)->create();
        Category::factory(10)->create();
        Product::factory(10)->create();
        Comment::factory(10)->create();
        Role::factory(2)->create();
    }
}
