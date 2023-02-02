<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
         /*
        1 = teacher;
        2 = pedagogue;        
        */

    
        DB::table('users')->insert([
            'name'=> 'Igor',
            'email' => 'igor@laravel.com',
            'password'=> Hash::make('12345678'),
            'type'=> 2,
        ]);
        DB::table('users')->insert([
            'name'=> 'Maria Lucia',
            'email' => 'malu@laravel.com',
            'password'=> Hash::make('12345678'),
            'type'=> 1,
        ]);
        DB::table('users')->insert([
            'name'=> 'Elias',
            'email' => 'elias@laravel.com',
            'password'=> Hash::make('12345678'),
            'type'=> 1,
        ]);



    }
}
