<?php 

use Illuminate\Support\Facades\Route;
use Adnane\Packalyser\Http\Controllers\InterfaceController;
use Adnane\Packalyser\Http\Controllers\PackageController;
use Adnane\Packalyser\Http\Controllers\OverviewController;

Route::get('packalyse' ,InterfaceController::class );

Route::prefix('packalyser/api')->group(function(){
    Route::get('get_packages' , PackageController::class);
    Route::get('get_stats' , OverviewController::class);
});

