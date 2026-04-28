<?php

namespace App\Actions\Agent;

use App\Models\Agent;
use Illuminate\Support\Str;

class GenerateMatricula
{
    private const MATRICULA_LENGTH = 8;

    public function __invoke(): string
    {
        do {
            $matricula = $this->generate();
        } while (Agent::where('matricula', $matricula)->exists());

        return $matricula;
    }

    private function generate(): string
    {
        return strtoupper(Str::random(self::MATRICULA_LENGTH));
    }
}
