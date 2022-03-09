<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Contato;

class NovoContato extends Notification implements ShouldQueue
{
    use Queueable;
    protected $contato;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Contato $contato)
    {
        $this->contato = $contato;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line(line:'Você recebeu um novo contato do site:')
                    ->line($this->contato->email)
                    ->line($this->contato->name)
                    ->line($this->contato->message);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
