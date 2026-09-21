<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
Route::get("/addproduct" , [ProductController::class,"create"] );
Route::post("/saveproduct" , [ProductController::class,"store"] );
Route::get("/showproducts", [ProductController::class, "index"]);
Route::delete("/deleteproduct/{id}", [ProductController::class, "destroy"]);
Route::get("/editproduct/{id}" , [ProductController::class, "edit"]);
Route::put("/updateproduct/{id}" , [ProductController::class,"update"] );