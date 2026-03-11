<?php

use Illuminate\Support\Facades\Route;
$cleaningServices = config('cleaning-services');

Route::get('/', function () use ($cleaningServices) {
    return view('home', ['services' => $cleaningServices]);
})->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
/*
|--------------------------------------------------------------------------
| Services Listing Page (Optional but Recommended)
|--------------------------------------------------------------------------
*/
Route::get('/services', function () use ($cleaningServices) {
    $karachiAreas = [
        'DHA Karachi',
        'Clifton',
        'Gulshan-e-Iqbal',
        'Bahria Town Karachi',
        'PECHS',
        'North Nazimabad',
        'Defence Phase 6',
        'Malir',
        'Korangi',
        'Saddar',
        'Gulistan-e-Johar',
        'Shahrah-e-Faisal',
        'University Road',
        'Nazimabad',
        'Lyari',
        'Landhi',
        'Korangi Crossing'
    ];

    return view('services', [
        'services' => $cleaningServices,
        'karachiAreas' => $karachiAreas,
    ]);
})->name('services.index');

/*
|--------------------------------------------------------------------------
| Service Detail Pages (Dynamic by Slug)
|--------------------------------------------------------------------------
*/

Route::get('/services/{slug}', function ($slug) use ($cleaningServices) {
    // Check if the service exists
    if (!array_key_exists($slug, $cleaningServices)) {
        abort(404);
    }

    $service = $cleaningServices[$slug];

    return view('services.details', [
        'service' => $service,
        'slug' => $slug,
        'allServices' => $cleaningServices,
    ]);
})->name('service.details');