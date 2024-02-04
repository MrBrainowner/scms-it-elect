<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('scms-2-firebase-adminsdk-vamt1-c755a4deea.json')
    ->withDatabaseUri('https://scms-2-default-rtdb.asia-southeast1.firebasedatabase.app/');

$database = $factory->createDatabase();

?>