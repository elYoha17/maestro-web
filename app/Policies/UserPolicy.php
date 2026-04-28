<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function attachAgent(User $user, User $target): bool
    {
        if ($target->agent) {
            return false;
        }

        if ($user->isAdmin()) {

            if ($user->id === $target->id) {
                return true;
            }

            return !$target->isAdmin();
        }

        if (
            $user->isManager() &&
            $user->isActiveAgent()
        ) {
            return !(
                $target->isAdmin() ||
                $target->isManager()
            );
        }

        return false;
    }
}
