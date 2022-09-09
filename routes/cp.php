<?php

Route::prefix('memory')->group(function(){
    Route::get('/', ['\\'. \RBMH\Memory\MemoryController::class, 'getStaticData'])->name('getStaticData');
});
