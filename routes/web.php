<?php

use App\Models\Office;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DistanceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $offices = Office::all();
    return view('welcome', ['office' => $offices]);
}) -> name('welcome');

Route::post('/inviteAffiliates', [DistanceController::class, 'inviteAffiliates']) -> name('inviteAffiliates');
