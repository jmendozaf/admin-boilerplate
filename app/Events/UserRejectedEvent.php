<?php

namespace App\Events;

use App\Models\User;
use App\Notifications\UserEnabledNotification;
use App\Notifications\UserRejectedNotification;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Log;

class UserRejectedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;

    /** @param User $user */
    public function __construct(User $user)
    {
        $this->user = $user;
        $user->notify((new UserRejectedNotification($user->first_name))->locale($user->locale));
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
