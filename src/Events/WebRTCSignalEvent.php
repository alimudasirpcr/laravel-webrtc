<?php
namespace ali\WebRTC\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class WebRTCSignalEvent implements ShouldBroadcastNow
{
    use InteractsWithSockets;

    public $signalData;

    public function __construct($signalData)
    {
        $this->signalData = $signalData;
    }

    public function broadcastOn()
    {
        return new PresenceChannel('webrtc-channel');
    }

    public function broadcastAs()
    {
        return 'signal';
    }
}



?>