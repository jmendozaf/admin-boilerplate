<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

class UserEnabledNotification extends Notification implements ShouldQueue
{

    use Queueable, SerializesModels;

    /**
     * The demo object instance.
     *
     * @var Demo
     */
    public $name;
    public static $toMailCallback;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject(__('Your application was approved').' | '. config('app.name'))
            ->markdown('emails.user-enabled-email', ['name' => $this->name]);
    }

    public static function toMailUsing($callback)
    {
        static::$toMailCallback = $callback;
    }


}
