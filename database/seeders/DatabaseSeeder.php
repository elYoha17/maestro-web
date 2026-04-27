<?php

namespace Database\Seeders;

use App\Enums\Role as EnumsRole;
use App\Models\Agent;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            \Database\Seeders\InitializeAppSeeder::class,
        ]);

        User::factory()
            ->hasAttached(Role::where('name', EnumsRole::ADMIN)->first())
            ->create([
                'name' => 'Admin User',
                'email' => 'admin@example.com',
            ]);

        User::factory()
            ->has(Agent::factory())
            ->hasAttached(Role::where('name', EnumsRole::MANAGER)->first())
            ->create([
                'name' => 'Manager User',
                'email' => 'manager@example.com',
            ]);

        User::factory()
            ->has(Agent::factory())
            ->create([
                'name' => 'Agent User',
                'email' => 'agent@example.com',
            ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory(10)->create();
    }
}
