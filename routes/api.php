<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Record;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/new-user', function () {
    $user = User::create();
    return response()->json($user, 201);
});

Route::post('/records', function () {
    $record = Record::create(request()->all());
    return response()->json($record, 201);
});

Route::get('/users/{user}/records', function (User $user) {
    $records = $user->records;
    return response()->json($records);
});
