<?php

require './vendor/autoload.php';

use App\Reader;

$readerCSV = new Reader('./files', 'dados.csv');

echo '<h4>CSV</h4>';
echo '<pre>';
var_dump($readerCSV->readFile());
echo '</pre>';

$readerTXT = new Reader('./files', 'dados.txt');
echo '<h4>TXT</h4>';
echo '<pre>';
var_dump($readerTXT->readFile());
echo '</pre>';