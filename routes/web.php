<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\PostController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function(){
    return view('test');
});

Route::resource('post', PostController::class);
