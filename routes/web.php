<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\MarkController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth','as'=>'admin.'],function(){
    
    Route::get('/mark/print',[MarkController::class,'print'])->name('mark.print');
    Route::resource('/book',BookController::class);
    //Route::get('/member/{member}/block',[MemberController::class,'block'])->name('member.block');
    Route::resource('/member',MemberController::class);
    
    Route::resource('/user',UserController::class);
    //Route::resource('/reader',ReaderController::class);

    
});

