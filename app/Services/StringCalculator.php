<?php

namespace App\Services;

class StringCalculator
{
    public function add(string $numbers): int
    {
        if ($numbers === "") {
            return 0;
        }
    }
}
