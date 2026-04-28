<?php

namespace App\Http\Controllers;

use App\Actions\Agent\CreateAgent;
use App\Actions\Agent\UpdateAgent;
use App\Models\Agent;
use App\Http\Requests\StoreAgentRequest;
use App\Http\Requests\UpdateAgentRequest;
use App\Models\User;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AgentController extends Controller
{
    public function store(StoreAgentRequest $request, User $user, CreateAgent $createAgent): RedirectResponse
    {
        $createAgent($user, $request->validated());

        return back();
    }

    public function update(UpdateAgentRequest $request, Agent $agent, UpdateAgent $updateAgent): RedirectResponse
    {
        $updateAgent($agent, $request->validated());

        return back();
    }
}
