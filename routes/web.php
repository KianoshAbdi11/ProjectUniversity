<?php

use App\Http\Controllers\ClassesController as ClassesControllerAlias;
use App\Http\Controllers\FormquestionController;
//use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\PersonaltrainingController;
use App\Http\Controllers\VidowController;
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
//////////////////web/////////////////
Route::controller(Test::class)->group(function (){
    Route::get('/','index')->name('index');
    Route::get('/about','about')->name('about');
    Route::get('/classes','classes')->name('classes');
    Route::get('/contactus','contactus')->name('contactus');
    Route::get('/package','package')->name('package');
    Route::get('/personal','personal')->name('personaltraining');
    Route::get('/videos','videos')->name('videos');
    Route::get('/dakichen','dakichen')->name('dakichen');
    Route::get('/journey','journey')->name('journey');
    Route::get('/persianfood','persianfood')->name('persianfood');
});
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'fa'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});
Auth::routes(
//    ['register'=>false]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function (){
    /////////// personaltraining //////////
    Route::controller(PersonaltrainingController::class)->group(function (){
        Route::get('/panel/personaltraining','show')->name('Personaltraining');
        Route::post('/personal_add','create');
        Route::get('/panel/update/{id}','edit');
        Route::post('/panel/update/{id}','update');
        Route::get('/panel/personaltraining/{id}','delete');
    });
////////////// videos ///////////
    Route::controller(VidowController::class)->group(function (){
        Route::get('/panel/videos','show')->name('video');
        Route::post('/videos_add','create');
        Route::get('/panel/updatevideos/{id}','edit');
        Route::post('/panel/updatevideo/{id}','update');
        Route::get('/panel/videos/{id}','delete');
    });

//Route::post('/formquestion',[FormquestionController::class,'create'])->name('formquestion');
///////////////// Classes /////////////
    Route::controller(ClassesControllerAlias::class)->group(function (){
        Route::get('/panel/classes','show')->name('Classes');
        Route::post('/class_add','create');
        Route::get('/panel/updateclass/{id}','edit');
        Route::post('/panel/updateclass/{id}','update');
        Route::get('/panel/classes/{id}','delete');
    });
    //////////// Panel //////////
    Route::get('/panel',[PanelController::class,'admin']);
});

////////////// form.question ////////////
Route::controller(FormquestionController::class)->group(function (){
    Route::post('/formquestion','create')->name('formquestion');
    Route::get('/panel/question','index')->name('question');
    Route::get('/panel/question/{id}','delete');
});
