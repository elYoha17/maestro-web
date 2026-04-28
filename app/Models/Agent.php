<?php

namespace App\Models;

use App\Actions\Agent\GenerateMatricula;
use App\Policies\AgentPolicy;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\UsePolicy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['first_name', 'last_name', 'other_name', 'sex', 'birth_date', 'phone_number', 'address', 'is_active'])]
#[UsePolicy(AgentPolicy::class)]
class Agent extends Model
{
    /** @use HasFactory<\Database\Factories\AgentFactory> */
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted(): void
    {
        static::creating(function (Agent $agent) {
            $agent->matricula = app(GenerateMatricula::class)();
        });
    }
}
