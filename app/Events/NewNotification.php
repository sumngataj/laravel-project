<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewNotification implements ShouldBroadCast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $name;
    public $uploaded;

    /**
     * Create a new event instance.
     */
    public function __construct($name, $uploaded)
    {
        $this->name = $name;
        $this->uploaded = $uploaded;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('popup-channel'),
        ];
    }
    public function broadcastAs(){
        return 'user-register';
    }
}