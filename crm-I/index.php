<?php

require './vendor/autoload.php';

use App\DAO\ContractModel;
use App\DAO\LeadModel;
use App\DAO\UserModel;

$contractModel = new ContractModel();
$leadModel = new LeadModel();
$userModel = new UserModel();

var_dump($contractModel);
var_dump($leadModel);
var_dump($userModel);
