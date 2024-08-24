<?php

use Carbon\Carbon;

function formatDateTime($dateTimeStr, string $format = 'H:i d-m-Y', $hours = 0, $addDate = 0)
{
    try {
        $date = Carbon::parse($dateTimeStr);

        if ($hours != 0) {
            $date->subHours((int)$hours);
        }
        if ($addDate != 0) {
            $date->addDay((int)$addDate);
        }

        return $date->format($format);
    } catch (\Exception $e) {
        return null;
    }
}

// function formatDate($date)
// {
//     if (strpos($date, ',') !== false) {
//         $date = trim(substr($date, strpos($date, ',') + 1));
//     }
//     return Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
// }

function formatDate($date)
{
    if (strpos($date, ',') !== false) {
        $date = trim(substr($date, strpos($date, ',') + 1));
    }

    $formats = ['d/m/Y', 'm/d/Y', 'Y-m-d']; // Add other formats as needed

    foreach ($formats as $format) {
        try {
            return Carbon::createFromFormat($format, $date)->format('Y-m-d');
        } catch (\Exception $e) {
            continue;
        }
    }

    // If no format matches, throw an exception or return a default value
    throw new \InvalidArgumentException("Invalid date format: $date");
}


function timeAgo($dateTimeStr)
{
    Carbon::setLocale('vi');
    $date = Carbon::parse($dateTimeStr);
    return $date->diffForHumans();
}

function getTime($dateTimeStr)
{
    return formatDateTime($dateTimeStr, 'H:i:s');
}

function getDuration($totalMinutes)
{
    $hours = floor($totalMinutes / 60);
    $minutes = $totalMinutes % 60;

    $hoursFormatted = $hours > 0 ? str_pad($hours, 2, '0', STR_PAD_LEFT) . 'h' : '';
    $minutesFormatted = $minutes > 0 ? str_pad($minutes, 2, '0', STR_PAD_LEFT) . "'" : '';
    return trim($hoursFormatted . $minutesFormatted);
}

function getTimeDistance($time, $distance)
{
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

function renderRatingStars($rating)
{
    $fullStars = floor($rating);
    $halfStar = ($rating - $fullStars) >= 0.5 ? 1 : 0;
    $emptyStars = 5 - $fullStars - $halfStar;
    $starsHtml = '<div class="rating">';
    // Hiển thị sao đầy
    for ($i = 0; $i < $fullStars; $i++) {
        $starsHtml .= '<i class="fa-solid fa-star"></i>';
    }
    // Hiển thị nửa sao nếu có
    if ($halfStar) {
        $starsHtml .= '<i class="fa-solid fa-star-half-stroke"></i>';
    }
    // Hiển thị sao rỗng
    for ($i = 0; $i < $emptyStars; $i++) {
        $starsHtml .= '<i class="fa-regular fa-star"></i>';
    }
    $starsHtml .= '</div>';
    return $starsHtml;
}

function renderRatingBar($rating)
{
    $widthPercentage = ($rating / 5) * 100;

    $progressBarHtml = '
            <div class="progress-bar" role="progressbar" aria-label="Basic example"
                style="width: ' . $widthPercentage . '%"
                aria-valuenow="' . $widthPercentage . '"
                aria-valuemin="0" aria-valuemax="100">
            </div>
    ';
    return $progressBarHtml;
}

function underscoreToStr($str)
{
    switch ($str) {
        case 'image_review_count':
            return 'Có hình ảnh';
            break;
        case 'detail_review':
            return 'Có đánh giá';
            break;
        default:
            return $str . '<i class="fa-solid fa-star ms-1"></i>';
            break;
    }
}
