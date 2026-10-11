<?php



use Illuminate\Support\Facades\Route;
//use resources\views\test.blade.php;
use App\Http\Controllers\PrimerControlador;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function(){
    return view('test');
});

Route::get('test',[PrimerControlador::class,'index'])->name('contact1');

//Route::get('/contact1', function(){
    
    //return view('contact1');
//})->name('contact1');

//Route::get('/contact2', function(){
    
    //return view('contact2');
//})->name('contact2');
