<?php

require './vendor/autoload.php';

use App\Email;
use App\Messenger;
use App\SMS;

$message = new Messenger(new Email());
$message->sendToken();

echo '<br>';

$message = new Messenger(new SMS());
$message->sendToken();