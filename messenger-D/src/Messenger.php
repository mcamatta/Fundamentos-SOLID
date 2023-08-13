<?php

namespace App;

class Messenger
{
    protected IMessageToken $channel;

    public function __construct(IMessageToken $channel)
    {
        $this->channel = $channel;
    }

    public function sendToken(): void
    {
        $this->channel->send();
    }
}
