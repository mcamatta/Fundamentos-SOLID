<?php

namespace App;

class EmailService
{
    private $to;
    private $from;
    private $subject;
    private $body;

    public function __construct(string $to = 'contact@mail.com', ?string $from = null, ?string $subject = null, ?string $body = null) {
        $this->to = $to;
        $this->from = $from;
        $this->subject = $subject;
        $this->body = $body;
    }


    public static function sendMail() {
        return '--- send email ---';
    }
}