<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        // $this->call(PostSeeder::class);

        // \App\Models\Chirp::factory(1)->create();
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'email_verified_at' => '2022-12-12 21:00:00',
            'password' => 'test@example.com',
        ]); 
        // \App\Models\Chirp::factory()->create([
        //     'user_id' => '1',
        //     'message' => 'message graine',
        //     'img_url' => 'https://bootcamp.laravel.com/img/logomark.min.svg',
        //     'timestamp' => '2022-12-12 21:00:00',
        // ]); 
  }
}
