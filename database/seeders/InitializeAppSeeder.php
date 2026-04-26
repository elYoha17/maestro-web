<?php

namespace Database\Seeders;

use App\Enums\Role as EnumsRole;
use App\Models\Role;
use Illuminate\Database\Seeder;

class InitializeAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::unguarded(function () {
            Role::updateOrCreate([
                    'name' => EnumsRole::ADMIN->value
                ], [
                    'label' => 'Administrateur',
                    'description' => ''
                ]
            );

            Role::updateOrCreate([
                    'name' => EnumsRole::MANAGER->value
                ], [
                    'label' => 'Gestionnaire',
                    'description' => ''
                ]
            );
        });
    }
}
