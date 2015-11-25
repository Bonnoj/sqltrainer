<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require '../vendor/autoload.php';
require 'database.php';

$app = new \Slim\Slim([
	'view' => new \Slim\Views\Twig()
]);

// Database
//$app->container->singleton('db', function() {
//	return new PDO('mysql:host=localhost:3307;dbname=sqltrainer', 'admini', 'admini');
//});

$app->db = function(){
	return new Capsule;
};

// Views
$view = $app->view();
$view->setTemplatesDirectory('../app/views');
$view->parserExtensions = [
	new \Slim\Views\TwigExtension()
];

require 'routes.php';

$app->run();

?>