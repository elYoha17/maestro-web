<?php

namespace App\Policies;

use App\Models\Agent;
use App\Models\User;

class AgentPolicy
{
    public function update(User $user, Agent $agent): bool
    {
        $target = $agent->user;

        if (!$target->agent) {
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
            if ($user->id === $target->id) {
                return true;
            }

            return !(
                $target->isAdmin() ||
                $target->isManager()
            );
        }

        return false;
    }
}
