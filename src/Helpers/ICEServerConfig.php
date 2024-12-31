<?php
namespace YourNamespace\WebRTC\Helpers;

class ICEServerConfig
{
    public static function getServers()
    {
        return config('webrtc.stun_servers');
    }
}



?>