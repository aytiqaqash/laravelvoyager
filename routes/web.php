<?php

use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Facades\Voyager;

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
    return view('welcome');
});
Route::get('/curr', [CurrencyController::class, 'getAllForToday']);

Route::get('loc/{locale}', function ($locale) {
    $langs = ['az','ru', 'en'];
    if (in_array($locale, $langs)) {
        Session::put('locale', $locale);
    } else {
        Session::put('locale', "az");
    }
    return redirect()->back();
})->name('locale');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/{slug}', [PageController::class, 'pageView'])
    ->name('{slug}');
