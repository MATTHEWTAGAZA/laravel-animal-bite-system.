<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImmunizationRecordController;

// Redirect root to the index page of immunization records
Route::get('/', function () {
    return redirect('/immunization-records');
});

// Resource route for CRUD operations
Route::resource('immunization-records', ImmunizationRecordController::class);

