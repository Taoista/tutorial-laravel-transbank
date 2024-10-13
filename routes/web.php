<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransbankController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::post("/iniciar", [TransbankController::class, "iniciar"])->name("iniciar");

Route::get("/confirmar-pago", [TransbankController::class, "confirmar_pago"])->name("confirmar-pago");

