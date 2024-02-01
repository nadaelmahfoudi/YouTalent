<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Entreprise;
use App\Models\Annonce;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // DB::table('users')->insert([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com', 
        // ]);

        // DB::table('entreprises')->insert([
        //     'name' => 'Youcode',
        //     'location' => 'try', 
        //     'details' => 'test', 
        // ]);
        User::factory(3)->create();
        Entreprise::factory()->count(3)->create();
        Annonce::factory(3)->create();
    }
}
