<?php 
use Illuminate\Support\Facades\Route;
use ali\WebRTC\Controllers\WebRTCController;
Route::get('test', function () {
    return response()->json(['message' => 'WebRTC package works!']);
});

Route::prefix('webrtc')->group(function () {
    Route::post('signal', [WebRTCController::class, 'signal']);
});

?>