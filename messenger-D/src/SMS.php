<?php

namespace App;

class SMS implements IMessageToken
{
    public function send(): void
    {
        echo 'SMS: your token is 555-111';
    }
}
