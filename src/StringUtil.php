<?php

declare(strict_types=1);

namespace App;

class StringUtil
{
    public static function getDuplicateLetters(string $text): string
    {
        $duplicates = [];

        foreach (str_split($text) as $char) {
            if (!preg_match('/[a-zA-Z]/', $char)){
                continue;
            }

            $char = strtolower($char);
            $duplicates[$char] = ($duplicates[$char] ?? 0) + 1;
        }

        $result = '';
        foreach ($duplicates as $char => $asteriskCount) {
            $result .= $char . ' ' . str_repeat('*', $asteriskCount). '; ';
        }

        return $result;
    }
}
