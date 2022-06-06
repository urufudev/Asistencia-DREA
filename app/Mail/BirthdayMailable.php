<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BirthdayMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public $message1 = '¡Feliz cumpleaños! Que este día sea especial y lo vivas en grande. Y que tu vida sea larga y esté llena de felicidad. Te deseo lo mejor porque te lo mereces.';

    public $message2 = 'Hace unos años, una persona muy especial vino al mundo para hacerlo un lugar mejor. ¡Feliz cumpleaños! Que disfrutes de este día con ilusión y mucha alegría. Y que cumplas muchos más años de vida. Te deseo felicidad, salud y que todos tus sueños se hagan realidad. Que tu vida sea larga para que durante muchos años tu luz interior ilumine a los que están cerca de ti.';

    public $message3 = '¡Feliz cumpleaños! Que disfrutes de este día con ilusión y en compañía de las personas que más amas en el mundo. Que la alegría sea constante y recibas muchos regalos.';

    public $message = [];


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->message = [$this->message1, $this->message2, $this->message3];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.birthday')->subject('🎂 Felíz Cumpleaños ' . ' ' . $this->user->name.' 🎂');
    }
}
