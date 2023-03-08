<?php

// Web API
Route::get('/proyecto/{id}/niveles', [App\Http\Controllers\Admin\LevelController::class, 'byProject'])->name('proyecto');

