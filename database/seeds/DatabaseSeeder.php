<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = new \App\Models\User();
        $user->name = 'Chaun Boomgt';
        $user->email = 'seo.boomgt123@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();
    }
}
