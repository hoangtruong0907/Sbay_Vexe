<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class Helpers
{
    public static function formatDate($date)
    {
        $date = substr($date, strpos($date, ', ') + 2);
        $date = str_replace('/', '-', $date);
        return date('Y-m-d', strtotime($date));
    }

    public static function getCachedData($cacheKey, $apiCallback, $minutes = 60, ...$args)
    {
        return Cache::remember($cacheKey, $minutes, function () use ($apiCallback, $args) {
            return $apiCallback(...$args);
        });
    }

    public static function getToken($main_url, $client_id, $client_secret)
    {
        $tokenData = Cache::get('api_token_vexere');
        if ($tokenData && isset($tokenData['expires_at']) && $tokenData['expires_at'] > now()) {
            return $tokenData['token'];
        }
        try {
            $response = Http::asForm()->post($main_url . "/v3/token", [
                'grant_type' => 'client_credentials',
                'client_id' => $client_id,
                'client_secret' => $client_secret,
            ]);

            if ($response->successful()) {
                $tokenData = $response->json();
                $expiresAt = now()->addSeconds($tokenData['expires_in']);
                Cache::put('api_token_vexere', [
                    'token' => $tokenData['access_token'],
                    'expires_at' => $expiresAt,
                ], $tokenData['expires_in']);

                return $tokenData['access_token'];
            } else {
                return null;
            }
        } catch (\Exception $e) {
            return null;
        }
    }
}
