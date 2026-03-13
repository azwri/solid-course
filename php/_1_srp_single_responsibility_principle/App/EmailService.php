<?php

namespace SRP\App;

class EmailService
{
    public function send(string $to, string $subject, string $body): void
    {
        echo "Email of subject of {$subject} to {$to} sent!\n";
    }
}