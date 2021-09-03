<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        // DB::table('users')->delete();

        // $users = [
        //     ['id' => 1, 'name' => 'Stephan de Vries', 'email' => 'stephan-v@gmail.com', 'password' => bcrypt('secret')],
        //     ['id' => 2, 'name' => 'John doe', 'email' => 'johndoe@gmail.com', 'password' => bcrypt('secret')],
        // ];

        // User::insert($users);
    }
}
