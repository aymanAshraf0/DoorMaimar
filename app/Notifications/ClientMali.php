<?php

// ClientMali.php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ClientMali extends Notification
{
    use Queueable;

    protected $name;
    protected $email;
    protected $message;

    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line("Name: {$this->name}")
                    ->line("Email: {$this->email}")
                    ->line("Message: {$this->message}");
    }
}
