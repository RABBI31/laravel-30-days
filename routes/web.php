<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    return view('about',[
    'jobs' => [
        [
            'id' => 1,
            'title' => 'Engineer',
            'salary' => '$20,000'
        ],
        [
            'id' => 2,
            'title' => 'Developer',
            'salary' => '$30,000'
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '$40,000'
        ]
    ]
]);
});
Route::get('/jobs/{id}', function($id){
    $jobs = [
        [
            'id' => 1,
            'title' => 'Engineer',
            'salary' => '$20,000'
        ],
        [
            'id' => 2,
            'title' => 'Developer',
            'salary' => '$30,000'
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '$40,000'
        ]
        ];

        $job = \Illuminate\Support\Arr::first($jobs, fn($job) => $job['id'] == $id);

        return view('job', ['job' =>$job]);
   
});
