<?php

namespace App\Services;

class StringCalculator
{
    public function add(string $numbers): int
    {
        if ($numbers === "") {
            return 0;
        }
        $delimeter = ",";
        if (str_starts_with($numbers, "//")) {
            $parts = explode("\n", $numbers, 2);
            $delimeter = substr($parts[0], 2);
            $numbers = $parts[1];
        }
        $numbers = str_replace("\n", $delimeter, $numbers);
        $nums = explode($delimeter, $numbers);
        $negatives = array_filter($nums, fn($n) => (int)$n < 0);
        if (!empty($negatives)) {
            throw new \Exception("negative numbers not allowed: " . implode(",", $negatives));
        }
        return array_sum($nums);
    }
}
