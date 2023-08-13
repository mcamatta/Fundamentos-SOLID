<?php

namespace App\DAO;

use App\BD;
use App\Components\Log;
use App\Components\Notification;
use App\Interfaces\ILog;
use App\Interfaces\INotification;
use App\Interfaces\IRegister;

class UserModel extends BD implements IRegister, ILog, INotification
{
    public function save() {}
    public function registerLog(Log $log) {}
    public function sendNotification(Notification $notification) {}
}