<?php

namespace App\Actions;

use App\Models\Agent;

class GenerateAgentMatricula
{
    private const ALPHABET = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    private const DIGITS = '0123456789';

    public function __invoke(): string
    {
        do {
            $matricula = $this->make();
        } while (Agent::where('matricula', $matricula)->exists());

        return $matricula;
    }

    private function make(): string
    {
        $first_part = $this->randomFrom(self::ALPHABET, 3);
        $second_part = $this->randomFrom(self::DIGITS, 6);
        $third_part = $this->randomFrom(self::ALPHABET . self::DIGITS, 3);

        return $first_part . $second_part . $third_part;
    }

    private function randomFrom(string $pool, int $length): string
    {
        $result = '';

        for ($i = 0; $i < $length; $i++) {
            $result .= $pool[random_int(0, strlen($pool) - 1)];
        }

        return $result;
    }
}
