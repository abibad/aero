<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::controller(PublicController::class)->group(function(){
    Route::get('/','inicio')->name('inicio'); 
}) ; 

Route::controller(PublicController::class)->group(function(){
    Route::get('/proyectos','proyectos')->name('proyectos'); 
}) ; 

Route::controller(PublicController::class)->group(function(){
    Route::get('/contacto','contacto')->name('contacto'); 
}) ; 

Route::controller(PublicController::class)->group(function(){
    Route::get('/nosotros','nosotros')->name('nosotros'); 
}) ; 

Route::controller(PublicController::class)->group(function(){
    Route::get('/blog','blog')->name('blog'); 
}) ; 