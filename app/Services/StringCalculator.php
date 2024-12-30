<?php

namespace App\Services;

class StringCalculator
{
    public function add(string $numbers): int
    {
        if ($numbers === "") {
            return 0;
        }
        $numbers = str_replace("\n", ",", $numbers);
        $nums = explode(",", $numbers);
        $negatives = array_filter($nums, fn($n) => (int)$n < 0);
        if (!empty($negatives)) {
            throw new \Exception("negative numbers not allowed: " . implode(",", $negatives));
        }
        return array_sum($nums);
    }
}
