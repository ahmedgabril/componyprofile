
<?php
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
    Route::get('handelcat', Handelcat::class)->name('handelcat');
    Route::get('handelproject', Handelproject::class)->name('handelproject');
    Route::get('handelserveies', Hndelserveies::class)->name('handelserveies');
    Route::get('handelpro', Handelprofile::class)->name('handelpro');
    Route::get('handelsetting', Handelsetting::class)->name('handelsetting');

    Route::view('profile', 'profile')
        ->middleware(['auth'])
        ->name('profile');

    // Route::get('logout', function () {
    //     auth()->logout();
    //     return redirect('/login');
    // })->name('logout');


    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/custom/livewire/update', $handle);
    });
    require __DIR__.'/auth.php';
});



