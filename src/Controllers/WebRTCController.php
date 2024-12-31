<?php 

namespace ali\WebRTC\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebRTCController extends Controller
{
    public function signal(Request $request)
    {
        $data = $request->all();

        // Validate and process the signal data (e.g., SDP, ICE candidates)
        // Broadcast the signal data to the other peer
        broadcast(new \ali\WebRTC\Events\WebRTCSignalEvent($data))->toOthers();

        return response()->json(['success' => true]);
    }
}

?>