
<?php

use App\Livewire\Handelcv;
use App\Livewire\Home;

use Livewire\Livewire;
use App\Livewire\Dashbord;
use App\Livewire\Handelcat;
use App\Livewire\Handelteam;
use App\Livewire\Handelabout;
use App\Livewire\Handelfacts;

use App\Livewire\Handelproject;
use App\Livewire\Handelsetting;
use App\Livewire\Hndelserveies;
use App\Livewire\Frontend\Getcv;
use App\Livewire\Frontend\AboutUs;
use App\Livewire\Frontend\Project;
use App\Livewire\Frontend\ContactUs;
use App\Livewire\Frontend\Getservies;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Livewire\Frontend\Getprojectdata;
use App\Livewire\Frontend\GetserviesData;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// Register Livewire update route outside localized routes


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {




    Route::get('/', Home::class)->name(name: 'home');


    Route::get('dashboard', Dashbord::class)
        ->middleware(['auth', 'verified'])
        ->name('dashboard');
        Route::post('/upload',[HomeController::class,'upload'])->name('ckeditor.upload');

    // fornt end routes

    Route::get('/contactus', ContactUs::class)->name('contactus');
    Route::get('/aboutus', AboutUs::class)->name('aboutus');
    Route::get('/getcv', Getcv::class)->name('getcv');
    Route::get('/project', Project::class)->name('project');
    Route::get('/getserv', Getservies::class)->name('getserv');
    Route::get('/getprodata/{gitid}', Getprojectdata::class)->name('getprodata');
    Route::get('/getservdata/{gitid}', GetserviesData::class)->name('getservdata');

  // backend routes
    Route::get('handelproject', Handelproject::class)->middleware(['auth', 'verified'])->name('handelproject');
    Route::get('handelcat', Handelcat::class)->middleware(['auth', 'verified'])->name('handelcat') ;
    Route::get('handelserveies', Hndelserveies::class)->middleware(['auth', 'verified'])->name('handelserveies');
    Route::get('handelabout', Handelabout::class)->middleware(['auth', 'verified'])->name('handelabout');
    Route::get('handelfact', Handelfacts::class)->middleware(['auth', 'verified'])->name('handelfact');
    Route::get('handelteam', Handelteam::class)->middleware(['auth', 'verified'])->name('handelteam');
    Route::get('handelsetting', Handelsetting::class)->middleware(['auth', 'verified'])->name('handelsetting');
    Route::get('/handelcv', Handelcv::class)->middleware(['auth', 'verified'])->name('handelcv');

    Route::view('profile', 'profile')->middleware(['auth']) ->name('profile');



    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/custom/livewire/update', $handle);
    });
    require __DIR__.'/auth.php';
});



