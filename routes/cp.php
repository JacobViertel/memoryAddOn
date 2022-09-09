<?php

Route::prefix('memory')->group(function(){
    Route::get('/', ['\\'. \RBMH\Memory\MemoryAddOnController::class, 'getStaticData'])->name('getStaticData');
});
