
<?php
use App\Livewire\Handelfacts;
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
    Route::get('handelfact', Handelfacts::class)->middleware(['auth'])->name('handelfact');
    Route::get('handelpro', Handelprofile::class)->middleware(['auth'])->name('handelpro');
    Route::get('handelsetting', Handelsetting::class)->middleware(['auth'])->name('handelsetting');

    Route::view('profile', 'profile')->middleware(['auth']) ->name('profile');



    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/custom/livewire/update', $handle);
    });
    require __DIR__.'/auth.php';
});



