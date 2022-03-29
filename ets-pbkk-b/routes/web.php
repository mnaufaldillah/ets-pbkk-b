<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RekamanController;
use App\Http\Controllers\FormController;
use App\Models\Dokter;
use App\Models\Pasien;

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

Route::get('/dashboard',function(){
    return redirect('/');
});

Route::get('/rekaman', [RekamanController::class, 'index']);
Route::get('/rekaman/{rekaman:slug}', [RekamanController::class, 'content']);

Route::get('/dokters/{dokter:slug}', function(Dokter $dokter) {
    return view('rekaman', [
        'title' => "Nama Dokter : $dokter->name",
        'rekamans' => $dokter->rekamen->load('dokter', 'pasien'),
    ]);
});

Route::get('/pasiens/{pasien:slug}', function(Pasien $pasien) {
    return view('rekaman', [
        'title' => "Nama Pasien : $pasien->name",
        'rekamans' => $pasien->rekamen->load('dokter', 'pasien'),
    ]);
});

Route::get('/input', [FormController::class, 'input']);
Route::post('/proses', [FormController::class, 'proses']);