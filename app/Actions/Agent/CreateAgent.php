<?php

namespace App\Actions\Agent;

use App\Models\Agent;
use App\Models\User;

class CreateAgent
{
    /**
     * Invoke the class instance.
     */
    public function __invoke(User $user, array $data): Agent
    {
        return $user->agents()->create($data);
    }
}
