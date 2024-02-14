<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('first');
// });
// Route::get('/abc', function () {
//     return view('about');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });


 
// Route::get('/', [ProductController::class, 'first']);
// Route::get('/contact', [ProductController::class, 'contact']);
// Route::get('/about', [ProductController::class, 'about']);

// Route::controller(ProductController::class)->group(function(){

//     // Route::get('/','first');
//     // Route::get('/contact','contact');
//     // Route::get('/about','about');

// })
  



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/register',[StudentController::class, 'register']);
Route::get('/students',[StudentController::class, 'getStudents']);
Route::post('/create',[StudentController::class, 'create']);
Route::get('/deletestudent/{id}',[StudentController::class, 'deleteStudent'])


?>