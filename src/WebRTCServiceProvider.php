<?php 
namespace ali\WebRTC;

use Illuminate\Support\ServiceProvider;

class WebRTCServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Merge config
        $this->mergeConfigFrom(__DIR__.'/config/webrtc.php', 'webrtc');
    }

    public function boot()
    {
        // Publish config
        $this->publishes([
            __DIR__.'/config/webrtc.php' => config_path('webrtc.php'),
        ]);

        // Load routes
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
    }
}
?>