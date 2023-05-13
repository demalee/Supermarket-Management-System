<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
//supermarket route
Route::get('/', [App\Http\Controllers\SupermarketController::class, 'index'])->name('welcome');
Route::get('add_kurasa_supermarket', [App\Http\Controllers\SupermarketController::class, 'create'])->name('add_kurasa_supermarket');
Route::post('kurasa_supermarkets', [App\Http\Controllers\SupermarketController::class, 'store'])->name('kurasa_supermarkets');
Route::get('update_supermarket/{id}', [App\Http\Controllers\SupermarketController::class, 'edit'])->name('update_supermarket');
Route::patch('supermarkets/update/{id}', [App\Http\Controllers\SupermarketController::class, 'update'])->name('supermarkets/update');
Route::delete('delete/supermarkets/{id}', [App\Http\Controllers\SupermarketController::class, 'destroy'])->name('delete/supermarkets');
Route::get('kurasa_supermarket/{id}', [App\Http\Controllers\SupermarketController::class, 'show'])->name('kurasa_supermarket');

//Managers route
Route::get('supermarkets/{supermarket}/add_manager', [App\Http\Controllers\ManagerController::class, 'create'])->name('add_manager');
Route::get('kurasa_managers', [App\Http\Controllers\ManagerController::class, 'index'])->name('kurasa_managers');

Route::post('supermarkets/{supermarket}/managers', [App\Http\Controllers\ManagerController::class, 'store'])->name('managers.store');

//employee route
Route::post('employees/import', [App\Http\Controllers\EmployeeController::class, 'import'])->name('employees.import');

Route::get('/kurasa_employees', [App\Http\Controllers\EmployeeController::class, 'index'])->name('kurasa_employees');
Route::post('/add_kurasa_employees', [App\Http\Controllers\EmployeeController::class, 'store'])->name('add_kurasa_employees');
Route::get('/kurasa_employees', [App\Http\Controllers\EmployeeController::class, 'index'])->name('kurasa_employees');
//supplier route
Route::post('/add_kurasa_suppliers', [App\Http\Controllers\SupplierController::class, 'store'])->name('add_kurasa_supppliers');
Route::get('/kurasa_suppliers', [App\Http\Controllers\SupplierController::class, 'index'])->name('kurasa_suppliers');
Route::post('suppliers/import', [App\Http\Controllers\SupplierController::class, 'import'])->name('suppliers.import');
Route::get('/supermarket-tests', [App\Http\Controllers\SupermarketController::class, 'testSupermarket'])->name('supermarket.tests');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
