<?php

Broadcast::channel('webrtc-channel', function ($user) {
    return ['id' => $user->id, 'name' => $user->name];
});

?>