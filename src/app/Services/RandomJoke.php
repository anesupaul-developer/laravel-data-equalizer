<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Http;

class RandomJoke
{
    /**
     * @throws Exception
     */
    public static function getJoke(): mixed
    {
        try {
            $joke = Http::get(env('MOCK_URL'));

            return json_decode($joke);
        } catch(Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }
}
