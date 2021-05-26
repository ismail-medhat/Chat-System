<?php

use App\Conversation;
use Carbon\Carbon;
use Illuminate\Support\Str;
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

        User::create([
            'name' => 'Sami',
            'email' => 'sami@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('123123123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Ali',
            'email' => 'ali@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('123123123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Mansour',
            'email' => 'mansour@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('123123123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Zain',
            'email' => 'zain@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('123123123'),
            'remember_token' => Str::random(10),
        ]);

        

       Conversation::create([
            'name' => 'Family Group',
            'uuid' => Str::uuid(),
            'user_id' => 1,
       ]);

       Conversation::create([
        'name' => 'Work Group',
        'uuid' => Str::uuid(),
        'user_id' => rand(1,4),
        ]);

        Conversation::create([
            'name' => 'Friends Group',
            'uuid' => Str::uuid(),
            'user_id' => rand(1,4),
        ]);

        Conversation::create([
            'name' => 'Guys Group',
            'uuid' => Str::uuid(),
            'user_id' => rand(1,4),
        ]);

        Conversation::create([
            'name' => 'Art Group',
            'uuid' => Str::uuid(),
            'user_id' => rand(1,4),
        ]);


    }
}
