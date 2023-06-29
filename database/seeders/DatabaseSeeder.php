<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Admin;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        // Student::factory(5)->create();

        
        $user = User::factory()->create([
            'name' => 'Rowser',
            'email' => 'rowrowamodia@gmail.com'
        ]);

        Student::factory(5)->create([
            'user_id' => $user->id
        ]);

        Admin::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
