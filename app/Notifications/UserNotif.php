<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserNotif extends Notification
{
    use Queueable;
    private $userNotif;

    public function __construct($usernotif)
    {
        $this->userNotif = $usernotif;
    }

    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Seseorang baru saja menambahkan sesuatu!');
    }

    public function toArray(object $notifiable): array
    {
        return [
            'userNotif' => $this->userNotif['userNotif'],
            // $user->notify(new UserNotif($userNotif))
        ];
    }
}
