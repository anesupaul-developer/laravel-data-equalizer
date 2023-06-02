<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Models\RandomJoke as Model;

class RandomJoke extends Controller
{
    public function __invoke(): JsonResponse
    {
        try {
            $jokes = Model::query()->paginate(10);

            return new JsonResponse($jokes);
        } catch(\Exception $exception) {
            return new JsonResponse(['error' => $exception->getMessage()]);
        }
    }
}
