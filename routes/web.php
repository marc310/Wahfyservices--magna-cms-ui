<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', function () {
    return view('magna.dist.index');
});


Route::get('/test', function () {
    return view('magna.dist.slides.Hero-sction');
});


Route::get('/booking-content', function () {
    return view('magna.dist.slides.Booking_content');
});

Route::get('/Hero-sction', function () {
    return view('magna.dist.slides.Hero-sction');
});

Route::get('/business-Description', function () {
    return view('magna.dist.slides.business-Description');
});

Route::get('/policy-container', function () {
    return view('magna.dist.slides.policy-container');
});

Route::get('/subscribtion', function () {
    return view('magna.dist.slides.subscribtion');
});


Route::get('/slider', function () {
    return view('slider');
});

Route::get('/testing', function () {
    return view('onepage');
});
 
Route::get('/contactus', function () {
    return view('magna.dist.contactus');
});
 
Route::get('/policy', function () {
    return view('magna.dist.policy');
});
 
Route::get('/clients', function () {
    return view('magna.dist.clients');
});

Route::get('/travel', function () {
    return view('travel');
});

Route::get('/charts', function () {
    return view('charts');
});
 

// Route::get('/', function () {
//     return view('auth.login')->middleware('auth','isAdmin');
// });

Route::get('/', function () {
return view('auth.login');
})->middleware('auth','isAdmin');

Route::get('/main', function () {
    return view('main');
});

Route::get('/tables', function () {
    return view('service.create');
});

Route::get('/search_results', 'App\Http\Controllers\ServiceController@search')->name('service.search');
Route::get('/show_status', 'App\Http\Controllers\ServiceController@get_status')->name('service.get_status');

Route::get('/sendemail', 'App\Http\Controllers\SendEmailController@index');
Route::post('/sendemail/send', 'App\Http\Controllers\SendEmailController@send');



Route::group(['middleware'=> ['auth']], function() {

    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::get('mail/contact/{id}', 'App\Http\Controllers\ContactController@show');




    
// Route::resource('service', App\Http\Controllers\ServiceController::class)->except('edit')->middleware('auth');

Route::resource('portifolio', App\Http\Controllers\PortifolioController::class)->except('edit')->middleware('auth');

Route::resource('post', App\Http\Controllers\PostsController::class)->except('edit')->middleware('auth');

Route::resource('about', App\Http\Controllers\AboutController::class)->except('edit')->middleware('auth');

Route::resource('comment', App\Http\Controllers\CommentController::class)->except('edit')->middleware('auth');

Route::resource('logo', App\Http\Controllers\LogoController::class)->except('edit')->middleware('auth');

Route::resource('appointment', App\Http\Controllers\AppointmentController::class)->middleware('auth');

Route::resource('slots', App\Http\Controllers\DaysSlotsController::class)->except('edit')->middleware('auth');

Route::resource('landing', App\Http\Controllers\LandingController::class)->except('edit')->middleware('auth');

Route::resource('namozag', App\Http\Controllers\NamozagController::class)->except('edit')->middleware('auth');

Route::resource('feature', App\Http\Controllers\FeatureController::class)->except('edit')->middleware('auth');

Route::resource('footer', App\Http\Controllers\FooterController::class)->except('edit')->middleware('auth');

Route::resource('sociallink', App\Http\Controllers\SociallinkController::class)->except('edit')->middleware('auth');

Route::resource('booking', App\Http\Controllers\BookingController::class)->middleware('auth');


Route::get('/schedule', function () {
    return view('schedule.schedule');
})->middleware('auth');

});

Route::resource('contact', App\Http\Controllers\ContactController::class);

Route::post('book_appointment', [App\Http\Controllers\BookingController::class,'store']);

Route::get('pdf/{id}','App\Http\Controllers\ServiceController@generate_pdf');
Route::get('img/{id}','App\Http\Controllers\ServiceController@generate_img');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
    




