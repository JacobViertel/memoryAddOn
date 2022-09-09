<?php

Route::prefix('memoryAddOn')->group(function(){
    Route::get('/', ['\\'. \RBMH\MemoryAddOn\AnnouncementController::class, 'getStaticData'])->name('getStaticData');
});
