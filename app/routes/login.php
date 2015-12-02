<?php

// Get method - Show login page
$app->get('/login', function() use ($app) 
{
	$app->render('login.php');
	
})->name('login');

// Post method - Submit login
$app->post('/login', function() use ($app) 
{
	$_SESSION['id5'] = "test";  // Initializing Session with value of PHP Variable
	
	// Retrieve 
	$email = $app->request->post()['email'];
	$password = $app->request->post()['password'];
	
	$app->redirect($app->urlFor('home'));
	
});