<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Event;

class SendMailSchedule extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $event;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $event = $this->event;
        $descricao = "";
        $view_mail = "mails.newschedule";
        if ($event->status == 1) {
            $descricao = " - Confirmado";
            $view_mail = "mails.confirmschedule";
        } elseif ($event->status == 2) {
            $descricao = " - Cancelado";
            $view_mail = "mails.cancelschedule";
        } elseif ($event->status == 3) {
            $descricao = " - Cancelado";
            $view_mail = "mails.cancelschedule";
        }

        return $this->subject('RoadTrip - Agendamento'.$descricao)
                    ->view($view_mail);
    }
}
