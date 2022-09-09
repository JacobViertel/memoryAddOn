<?php

Route::prefix('announcement')->group(function(){
    Route::get('/', ['\\'. \RBMH\Announcement\AnnouncementController::class, 'getStaticData'])->name('getStaticData');
});
