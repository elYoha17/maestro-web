<?php

namespace App\Providers;

use App\Enums\Role as EnumsRole;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class MaestroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Gate::define('admin', function (User $user) {
            return $user->roles->contains('name', EnumsRole::ADMIN->value);
        });

        Gate::define('manage', function (User $user) {
            return $user->agent?->is_active &&
                $user->roles->contains('name', EnumsRole::MANAGER->value);
        });
    }
}
