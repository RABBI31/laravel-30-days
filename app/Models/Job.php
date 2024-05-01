<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        $jobs = [
            [
                'id' => 1,
                'title' => 'Engineer',
                'salary' => '$20,000',
            ],
            [
                'id' => 2,
                'title' => 'Developer',
                'salary' => '$30,000',
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40,000',
            ],
        ];

        return $jobs;
    }

    public static function find($id): array
    {
        $job = Arr::first(static::all(), fn ($job) => $job['id'] == $id);

        if (! $job) {
            abort(404);
        }

        return $job;
    }
}
