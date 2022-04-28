<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class ResetPassword extends Notification
{
    /**
     * The password reset token.
     *
     * @var string
     */
    public $token;
    public $name;

    /**
     * The callback that should be used to build the mail message.
     *
     * @var \Closure|null
     */
    public static $toMailCallback;


    public function __construct($token,$name)
    {
        $this->token = $token;
        $this->name = $name;
    }

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url =url(route('password.reset', ['token' => $this->token, 'email' => $notifiable->getEmailForPasswordReset()]));

        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable, $this->token);
        }

        return (new MailMessage)
            ->subject(__('Reset Password').' | '. config('app.name'))
            ->markdown('emails.reset-password-mail', ['name'=> $this->name, 'url' => $url, 'count' => config('auth.passwords.'.config('auth.defaults.passwords').'.expire')]);

        return (new MailMessage)
            ->subject(Lang::get('passwords.reset-password-notification'))
            ->line(Lang::get('passwords.you-are-receiving-this-email-because-we-received-a-password-reset-request-for-your-account'))
            ->action(Lang::get('passwords.reset-password'), url(route('password.reset', ['token' => $this->token, 'email' => $notifiable->getEmailForPasswordReset()], false)))
            ->line(Lang::get('passwords.link-will-expire', ['count' => config('auth.passwords.'.config('auth.defaults.passwords').'.expire')]))
            ->line(Lang::get('passwords.if-you-did-not-request-a-password-reset-no-further-action-is-required'));
    }

    /**
     * Set a callback that should be used when building the notification mail message.
     *
     * @param  \Closure  $callback
     * @return void
     */
    public static function toMailUsing($callback)
    {
        static::$toMailCallback = $callback;
    }
}
