<?php

use Illuminate\Database\Capsule\Manager as DatabaseConnection;

$connectionPointer = new DatabaseConnection();

$connectionPointer->addConnection([
    'driver'    => 'mysql',
    'host'      => '127.0.0.1',
    'database'  => 'bbvafrances',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
]);

$connectionPointer->setAsGlobal();

$connectionPointer->bootEloquent();
