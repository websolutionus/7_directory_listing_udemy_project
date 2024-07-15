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
    public $listingId;
    public $receiverId;
    /**
     * Create a new event instance.
     */
    public function __construct($messageData, $listingId, $receiverId)
    {
        $this->messageData = $messageData;
        $this->listingId = $listingId;
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
                'listing_id' => $this->listingId,
                'receiver_id' => $this->receiverId,
                'user' => auth()->user()->only(['id', 'name', 'avatar'])
            ];
    }
}
