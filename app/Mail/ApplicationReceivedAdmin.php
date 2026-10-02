<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationReceivedAdmin extends Mailable
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
        $subject = 'Neuer Finanzierungsantrag eingegangen';

        return $this->subject($subject)
            ->view('emails.apply.admin')
            ->with([
                'data' => $this->data,
                'summary' => $this->summary,
            ]);
    }
}
