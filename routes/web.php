<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Admin\ApplicationController as AdminApplicationController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/apply', [ApplicationController::class, 'create'])->name('apply.create');
Route::post('/apply', [ApplicationController::class, 'store'])->name('apply.store');
Route::get('/success', [ApplicationController::class, 'success'])->name('apply.success');

// Admin unlock (password: 0907)
Route::get('/admin/unlock', [\App\Http\Controllers\Admin\AdminUnlockController::class, 'showForm'])
    ->name('admin.unlock.form');

Route::post('/admin/unlock', function (\Illuminate\Http\Request $request) {
    $password = (string) $request->input('password');

    if (hash_equals('0907', $password)) {
        $request->session()->put('admin_unlocked', true);
        $request->session()->regenerate();

        return redirect()->route('admin.applications.index');
    }

    return back()->withErrors(['password' => 'Incorrect password.'])->withInput();
})->name('admin.unlock');

Route::middleware('web')->group(function () {
    Route::get('/admin/applications', [AdminApplicationController::class, 'index'])->name('admin.applications.index');
    Route::get('/admin/applications/{id}', [AdminApplicationController::class, 'show'])->name('admin.applications.show');
});



