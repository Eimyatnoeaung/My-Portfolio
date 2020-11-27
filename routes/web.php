<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Auth;

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
Route::get("/",[PizzaController::class,'index'])->name("home");
//read
Route::middleware(['auth:sanctum', 'verified'])->get('/pizzas', [PizzaController::class,"pizzas"])->name("pizzas");
Route::post("/",[PizzaController::class,'insert'])->name("insert");
//delete
Route::get("/pizzas/{id}",[PizzaController::class,"delete"])->name("delete");
// edit form route
Route::get("/pizzas/edit/{id}",[PizzaController::class,"edit"])->name("edit");
//update route
Route::post("/pizzas/update/{id}",[PizzaController::class,"update"])->name("update");

// Route::get('/dashboard', function () {
//     return Inertia\Inertia::render('Dashboard');
// })->name('dashboard');
// Route::get("/logout",function(){
//     Auth::logout();
//     return redirect()->route("home");
// })->name("logout");

Route::get("/logout",function(){
    Auth::logout();
    return redirect()->route("login");
})->name("logout");
