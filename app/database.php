<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
	'driver' => 'mysql',
	'host' => 'localhost:3307',
	'database' => 'sqltrainer',
	'username' => 'admini',
	'password' => 'admini',
	'charset' => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix' => ''
]);

$capsule->addConnection([
	'driver' => 'mysql',
	'host' => 'localhost:3307',
	'database' => 'sqltrainer',
	'username' => 'select',
	'password' => 'select',
	'charset' => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix' => ''
], 'select');

$capsule->setAsGlobal();
$capsule->bootEloquent();
