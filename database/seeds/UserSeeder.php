<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;
use App\Comment;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // With factory (only override the column you want to set with a value)
        $user = factory(App\User::class)->make([
            'password' => bcrypt('secret')
        ]);     

        // Multiple with factory
        factory(App\User::class, 2)->create();
        factory(App\Post::class, 10)->create();
        factory(App\Comment::class, 10)->create();
    }
}
