<?php

namespace App\Actions\Agent;

use App\Models\Agent;

class UpdateAgent
{
    public function __invoke(Agent $agent, array $data): Agent
    {
        $agent->update($data);

        return $agent;
    }
}
