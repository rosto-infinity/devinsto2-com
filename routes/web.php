<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\AI;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'test' => 'Hello World!',
//     ]);
// });

Route::get('/ai-messages', function (Request $request) {
    return AI::query()
        ->orderBy('id')
        ->cursorPaginate(15); // 15 est le nombre d'éléments par page
});
