<?php

use Carbon\Carbon;

function formatDateTime($dateTimeString, $format = 'H:m d-m-Y')
{
    try {
        $date = Carbon::parse($dateTimeString);
        return $date->format($format);
    } catch (\Exception $e) {
        return null;
    }
}

function getTime($dateTimeString)
{
    return formatDateTime($dateTimeString, 'H:i:s');
}

function getDuration($totalMinutes)
{
    $hours = floor($totalMinutes / 60);
    $minutes = $totalMinutes % 60;

    $hoursFormatted = $hours > 0 ? str_pad($hours, 2, '0', STR_PAD_LEFT) . 'h' : '';
    $minutesFormatted = $minutes > 0 ? str_pad($minutes, 2, '0', STR_PAD_LEFT) . "'" : '';
    return trim($hoursFormatted . $minutesFormatted);
}

function getTimeDistance($time, $distance) {
    list($hours, $minutes) = explode(':', $time);
    $totalMinutes = $hours * 60 + $minutes;

    $newTotalMinutes = $totalMinutes + $distance;
    $newHours = floor($newTotalMinutes / 60) % 24;
    $newMinutes = $newTotalMinutes % 60;

    if ($newMinutes < 0) {
        $newMinutes += 60;
        $newHours = ($newHours - 1 + 24) % 24;
    }
    return sprintf('%02d:%02d', $newHours, $newMinutes);
}

function formatCurrency($number)
{
    return number_format($number, 0, ',', '.') . 'đ';
}
