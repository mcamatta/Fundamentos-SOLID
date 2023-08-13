<?php

namespace App\DAO;

use App\BD;
use App\Components\Notification;
use App\Interfaces\INotification;
use App\Interfaces\IRegister;

class LeadModel extends BD implements IRegister, INotification
{
    public function save() {}
    public function sendNotification(Notification $notification) {}
}