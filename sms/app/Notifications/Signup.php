<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class Signup extends Notification
{
    use Queueable;

    public $user, $token;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user, $token)
    {
        $this->user = $user;
        $this->token = $token;
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
                        ->subject('Sign Up - Set Password')
                        ->greeting('Hello, ' . $notifiable->name)
                        ->line('Name: '.$this->user->name.' - Active your account.')
                        ->action('Set Password', url('/password/reset/'.$this->token))
                        ->line('Thank you!');

                    /*
	Hello <username>, 
	
	Offer <link><offername></link> for <customername> was created on <date> and is still in Awaiting status. 
	Please do the needful. 
	
	Regards
    GreenSky Admin. 
    */
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
