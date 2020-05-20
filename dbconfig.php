<?php

require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'\pkroyckp-e9ec1-firebase-adminsdk-2t6za-1ae3c5e833.json');
$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->withDatabaseUri('https://pkroyckp-e9ec1.firebaseio.com/')
    ->create();

$database = $firebase->getDatabase();
?>