<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

Route::prefix('dosen')->group(function () {

    Route::get('profil', function () {
        $title = 'Profil';
        $text = 'Halaman Profil Dosen';

        return view('dosen.index', compact('title', 'text'));
    });

    Route::get('ampu', function () {
        $title = 'Data_pengampu';
        $text = 'Halaman Data Mata Kuliah Yang diampu';

        return view('dosen.index', compact('title', 'text'));
    });

});
