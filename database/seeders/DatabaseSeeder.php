<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

        DB::table('users')->insert([
            'name' => 'קונסטנטין',
            'family' =>  'נפדוב',
            'phone' => '0546956725',
            'birthday' => '1982-02-05',
            'email' => 'nefedovkos@gmail.com',
            'password' => '$2y$10$K6QfeJ4AQxI5AjmYWmj77OjQj87rCxrakNnYvyIDZ2RSmSRIRVsEe',
            'created_at' => '2021-08-08 20:08:28',
            'updated_at' => '2021-08-08 20:08:35',
        ]);
    }
}
