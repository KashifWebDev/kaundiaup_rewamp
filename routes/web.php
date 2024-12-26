<?php

use App\Http\Controllers\CivicManagementController;
use App\Http\Controllers\FamilyManagementController;
use App\Http\Controllers\HeirManagementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TradeLicenseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('locale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'bn'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('locale.change');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Civic Management
Route::prefix('civic-management')->name('civic.')->group(function () {
    Route::get('/new-applicants', [CivicManagementController::class, 'newApplicants'])->name('new_applicants');
    Route::get('/certificate-recipients', [CivicManagementController::class, 'certificateRecipients'])->name('certificate_recipients');
});

// Trade License Management
Route::prefix('trade-license-management')->name('trade.')->group(function () {
    Route::get('/new-applicants', [TradeLicenseController::class, 'newApplicants'])->name('new_applicants');
    Route::get('/certificate-recipients', [TradeLicenseController::class, 'certificateRecipients'])->name('certificate_recipients');
    Route::get('/renewal-applicants', [TradeLicenseController::class, 'renewalApplicants'])->name('renewal_applicants');
    Route::get('/expired-trade-license', [TradeLicenseController::class, 'expiredTradeLicense'])->name('expired_trade_license');
});

// Heir Management
Route::prefix('heir-management')->name('heir.')->group(function () {
    Route::get('/new-applicants', [HeirManagementController::class, 'newApplicants'])->name('new_applicants');
    Route::get('/certificate-recipients', [HeirManagementController::class, 'certificateRecipients'])->name('certificate_recipients');
    Route::get('/expired-heir', [HeirManagementController::class, 'expiredHeir'])->name('expired_heir');
});

// Family Management
Route::prefix('family-management')->name('family.')->group(function () {
    Route::get('/new-applicants', [FamilyManagementController::class, 'newApplicants'])->name('new_applicants');
    Route::get('/certificate-recipients', [FamilyManagementController::class, 'certificateRecipients'])->name('certificate_recipients');
});

require __DIR__.'/auth.php';
