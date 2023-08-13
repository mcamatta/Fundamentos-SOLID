<?php

namespace App;

class Email implements IMessageToken
{
    public function send(): void
    {
        echo 'E-mail: your token is 555-444';
    }
}
