<?php

namespace App\Helpers;

class Helpers
{
    public static function formatDate($date)
    {
        $date = substr($date, strpos($date, ', ') + 2);
        $date = str_replace('/', '-', $date);
        return date('Y-m-d', strtotime($date));
    }
}
