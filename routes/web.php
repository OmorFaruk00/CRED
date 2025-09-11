<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::prefix('about')->name('about.')->group(function () {
    Route::get('/director', [HomeController::class, 'director'])->name('director');
    Route::get('/vision-mission', [HomeController::class, 'visionMission'])->name('vision');
    Route::get('/objectives', [HomeController::class, 'objectives'])->name('objectives');
    Route::get('/governance-structure', [HomeController::class, 'governanceStructure'])->name('governanceStructure');
    Route::get('/advisory-board', [HomeController::class, 'advisoryBoard'])->name('advisoryBoard');
    Route::get('/team', [HomeController::class, 'team'])->name('team');

});
Route::prefix('research')->name('research.')->group(function () {
    Route::get('/ongoing-research-project', [ResearchController::class, 'ongoingResearchProject'])->name('ongoing-research-project');
    Route::get('/completed-research', [ResearchController::class, 'completedResearch'])->name('completed-research');


});
