<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\ApplicationController;

Route::pattern('locale', implode('|', config('app.supported_locales', ['fr','en','ar','es','de','it','pt','ru','vi','zh','he','ja','ko','th','tr','uk','zh-Hans','zh-Hant'])));

Route::get('/', function () {
    return redirect()->route('index');
});

Route::get('{locale}/index', function (string $locale) {
    return view('welcome');
})->name('index');

Route::get('{locale}', function (string $locale) {
    return redirect()->route('index', ['locale' => $locale]);
});

Route::get('{locale}/contact', [ContactController::class, 'index'])->name('contact');

// Prêts
Route::prefix('{locale}/prets')->name('loans.')->group(function () {
    Route::view('/consommation', 'prets.consommation')->name('conso');
    Route::view('/travaux', 'prets.travaux')->name('travaux');
    Route::view('/immobilier', 'prets.immobilier')->name('immobilier');
    Route::view('/rachat-de-credit', 'prets.rachat-credit')->name('rachat');
    Route::view('/credit-bail', 'prets.credit-bail')->name('credit-bail');
    Route::view('/etudiant', 'prets.etudiant')->name('etudiant');
});

// Assurances
Route::prefix('{locale}/assurances')->name('insurance.')->group(function () {
    Route::view('/emprunteur', 'assurances.emprunteur')->name('emprunteur');
    Route::view('/habitation', 'assurances.habitation')->name('habitation');
    Route::view('/sante', 'assurances.sante')->name('sante');
    Route::view('/animaux', 'assurances.animaux')->name('animaux');
    Route::view('/professionnelles', 'assurances.professionnelle')->name('professionnelles');
});

// À propos
Route::prefix('{locale}/a-propos')->name('about.')->group(function () {
    Route::view('/mentions-legales', 'apropos.mentions-legales')->name('mentions');
    Route::view('/cookies', 'apropos.cookies')->name('cookies');
    Route::view('/comment-ca-marche', 'apropos.comment-ca-marche')->name('how');
});

// Demande de financement (2 étapes)
Route::prefix('{locale}/obtain-financing')->name('apply.')->group(function () {
    Route::get('/', [ApplicationController::class, 'showStep1'])->name('step1');
    Route::post('/', [ApplicationController::class, 'postStep1'])->name('step1.post');
    Route::get('/details', [ApplicationController::class, 'showStep2'])->name('step2');
    Route::post('/details', [ApplicationController::class, 'postStep2'])->name('step2.post');
});

Auth::routes(['register' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Zone admin protégée (pas de langue requise)
Route::middleware(['auth', 'admin'])->withoutMiddleware([\App\Http\Middleware\SetLocale::class])->group(function () {
    Route::view('/admin', 'admin.dashboard')->name('admin.dashboard');
    Route::get('/admin/settings', [SettingsController::class, 'index'])->name('admin.settings.index');
    Route::post('/admin/settings', [SettingsController::class, 'update'])->name('admin.settings.update');
});
