<?php

use App\Livewire\Events;
use App\Livewire\Cabinet;
use App\Livewire\PhotoList;
use Illuminate\Support\Facades\Route;

//Route::view('/', 'welcome');
Route::get('/', Events::class)
//	->middleware(['auth'])
	->name('events');

Route::get('events', Events::class)
//	->middleware(['auth'])
	->name('events');
Route::get('cabinet', Cabinet::class)
	->middleware(['auth', 'verified'])
	->name('cabinet');
Route::get('/photos', PhotoList::class)
//	->middleware(['auth'])
	->name('photos');
Route::get('news', \App\Livewire\NewsList::class)
//	->middleware(['auth'])
	->name('news');

Route::get('news/{id}', \App\Livewire\NewsSingle::class)
//	->middleware(['auth'])
	->name('news.single');


Route::view('dashboard', 'dashboard')
//	->middleware(['auth', 'verified'])
	->name('dashboard');

Route::view('profile', 'profile')
	->middleware(['auth'])
	->name('profile');

require __DIR__ . '/auth.php';

//
//use Actions\Logout;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Route;
//
//// Маршрут для НЕ авторизованного пользователя
//Route::middleware(['guest'])->group(function () {
//    Route::view('/', 'welcome-marudi')->name('cms2.index');
//});
//
//// Маршрут для авторизованного пользователя
//Route::middleware(['auth'])->group(function () {
//    Route::get('/', \Cms2\Index::class)->name('cms2.index');
//
//    Route::get('/logout', function (Request $request) {
//        Auth::logout();
//        $request->session()->invalidate();
//        $request->session()->regenerateToken();
//        return redirect('/');
//    })->name('logout');
//
//    Route::group([
//        'as' => 'buh.',
//    ], function () {
//        Route::get('buh/scheta', \Cms2\BuhScheta::class)
//            ->name('sheta');
//        Route::get('buh/uslugi', \Cms2\BuhUslugi::class)
//            ->name('uslugi');
//        Route::get('buh/zakazs', \Cms2\BuhZakaz::class)
//            ->name('zakazs');
//    });
//
//    Route::get('/clients', \Cms2\Clients::class)->name('clients');
//    Route::get('/clients/{id}', \Cms2\ClientsInfo::class)->name('clients.info');
//
//    Route::prefix('staff')->name('staff.')->group(function () {
//        Route::get('/', \Cms2\Staff::class)->name('index');
//        Route::get('info/{staff}', \Cms2\StaffInfo::class)->name('info');
//    });
//
//    Route::prefix('dogovor')->name('dogovor.')->group(function () {
//        Route::get('/', \Cms2\Contracts::class)->name('index');
//        Route::get('/template', \Cms2\ContractsTemplate::class)->name('template');
//    });
//
////
//    Route::get('/u-list', \Cms2\UserList::class)->name('user_list');
//});
//
//require __DIR__ . '/auth.php';
