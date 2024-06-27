
<?php
use App\Livewire\Home;
use Livewire\Livewire;
use App\Livewire\Handelcat;
use App\Livewire\Handelteam;
use App\Livewire\Handelabout;
use App\Livewire\Handelfacts;
use App\Livewire\Handelprofile;
use App\Livewire\Handelproject;
use App\Livewire\Handelsetting;
use App\Livewire\Hndelserveies;
use App\Livewire\Frontend\Project;
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




    Route::get('/', Home::class)->name('home');




    Route::view('dashboard', 'dashboard')
        ->middleware(['auth', 'verified'])
        ->name('dashboard');
        Route::post('/upload',[HomeController::class,'upload'])->name('ckeditor.upload');

    // Use Livewire components

    Route::get('/project', Project::class)->name('project');
    Route::get('/getserv', Getservies::class)->name('getserv');
    Route::get('/getprodata/{gitid}', Getprojectdata::class)->name('getprodata');
    Route::get('/getservdata/{gitid}', GetserviesData::class)->name('getservdata');

  // backend routes
    Route::get('handelproject', Handelproject::class)->name('handelproject');
    Route::get('handelcat', Handelcat::class)->middleware(['auth'])->name('handelcat');
    Route::get('handelserveies', Hndelserveies::class)->middleware(['auth'])->name('handelserveies');
    Route::get('handelabout', Handelabout::class)->middleware(['auth'])->name('handelabout');
    Route::get('handelfact', Handelfacts::class)->middleware(['auth'])->name('handelfact');
    Route::get('handelteam', Handelteam::class)->middleware(['auth'])->name('handelteam');
    Route::get('handelsetting', Handelsetting::class)->middleware(['auth'])->name('handelsetting');

    Route::view('profile', 'profile')->middleware(['auth']) ->name('profile');



    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/custom/livewire/update', $handle);
    });
    require __DIR__.'/auth.php';
});



