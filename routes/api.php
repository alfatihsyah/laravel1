<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryControler;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route ::post("register_admin",[AuthController::class,"register"]);
Route :: get("/get_user",[AuthController::class,"getUser"]);
Route :: get("/get_detail_user/{id}",[AuthController ::class,"getDetailUser"]);
Route :: put("/update_user/{id}",[AuthController::class,"update_user"]);
Route :: delete("/hapus_user/{id}",[AuthController::class,"hapus_user"]);
Route :: post("/category",[categoryControler::class,"create"]);
Route :: put("/updateCategory/{id}",[categoryControler::class,"updateCategory"]);
Route::post("/login",[AuthController::class,"login"]);
Route::get("/logout",[AuthController::class,"logout"]);
