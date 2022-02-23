<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';


Route::get('main',[mainController::class,'main']);
Route::get('products',[mainController::class,'products']);
Route::get('products60',[mainController::class,'products60']);
Route::get('products180',[mainController::class,'products180']);
Route::get('products540',[mainController::class,'products540']);
Route::get('chalks',[mainController::class,'chalks']);
Route::get('services',[mainController::class,'services']);
Route::get('achievements',[mainController::class,'achievements']);
Route::get('livestockkeeping',[mainController::class,'livestockkeeping']);
Route::get('typesofchicken',[mainController::class,'typesofchicken']);
Route::get('diseases',[mainController::class,'diseases']);
Route::get('others',[mainController::class,'others']);
Route::get('contacts',[mainController::class,'contacts']);
Route::get('veta',[mainController::class,'veta']);
Route::get('patent',[mainController::class,'patent']);
Route::get('tuzo',[mainController::class,'tuzo']);
Route::get('costech',[mainController::class,'costech']);
Route::get('babies',[mainController::class,'babies']);
Route::get('ventilator',[mainController::class,'ventilator']);