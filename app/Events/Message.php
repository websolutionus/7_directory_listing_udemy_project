<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Message implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $messageData;
    public $senderId;
    public $receiverId;
    /**
     * Create a new event instance.
     */
    public function __construct($messageData, $senderId, $receiverId)
    {
        $this->$messageData = $messageData;
        $this->senderId = $senderId;
        $this->receiverId = $receiverId;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('message.'.$this->receiverId),
        ];
    }

    function broadcastWith() : array {
        return [
                'message_data' => $this->messageData,
                'sender_id' => $this->senderId,
                'receiver_id' => $this->receiverId,
                'user' => auth()->user()->only(['id', 'name', 'avatar'])
            ];
    }
}
