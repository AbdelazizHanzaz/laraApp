<?php

use App\Http\Controllers\ChannelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PayOrderController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/home', [HomeController::class, 'home']);

Route::get('pay', [PayOrderController::class, 'store']);

Route::get('channels', [ChannelController::class, 'index']);

Route::get('post/create', [PostController::class, 'create']);

Route::get('users/{id}', function ($id) {

      dd($id);
});

Route::bind('id', function($value){
    if($value > 4){
        throw new HttpResponseException(new RedirectResponse('/'));
    }
    dd($value);

});

Route::get('users', function(){
    return \App\Models\User::all();
  //\App\Models\User::factory()->count(5)->create();
});

Route::prefix("channel")->get("name", [ChannelController::class, 'getMyName']);
