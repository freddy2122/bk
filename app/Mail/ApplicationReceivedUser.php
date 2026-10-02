<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationReceivedUser extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;
    public array $summary;

    public function __construct(array $data, array $summary)
    {
        $this->data = $data;
        $this->summary = $summary;
    }

    public function build(): self
    {
        $locale = app()->getLocale();
        $subject = match ($locale) {
            'de' => 'Wir haben Ihren Finanzierungsantrag erhalten',
            'en' => 'We received your financing request',
            'es' => 'Hemos recibido su solicitud de financiación',
            default => 'Nous avons bien reçu votre demande de financement',
        };

        return $this->subject($subject)
            ->view('emails.apply.user')
            ->with([
                'data' => $this->data,
                'summary' => $this->summary,
            ]);
    }
}
