
<?php
use App\Livewire\Handelabout;
use App\Livewire\Handelfacts;
use App\Livewire\Handelteam;
use Livewire\Livewire;
use App\Livewire\Handelcat;
use App\Livewire\Handelprofile;
use App\Livewire\Handelproject;
use App\Livewire\Handelsetting;
use App\Livewire\Hndelserveies;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// Register Livewire update route outside localized routes


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {




    Route::view('/', 'welcome');




    Route::view('dashboard', 'dashboard')
        ->middleware(['auth', 'verified'])
        ->name('dashboard');
        Route::post('/upload',[HomeController::class,'upload'])->name('ckeditor.upload');

    // Use Livewire components
    Route::get('handelcat', Handelcat::class)->middleware(['auth'])->name('handelcat');
    Route::get('handelproject', Handelproject::class)->middleware(['auth'])->name('handelproject');
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



