<?php
namespace App\Helpers;

class TextHelper {

    public static function excerpt(string $content, int $limit = 300) : string
    {
        if(mb_strlen($content) < $limit) {
            return $content;
        }
        $lastSpace = mb_strpos($content, ' ', $limit);
        return mb_substr($content, 0, $lastSpace) . '...';
    }
}
