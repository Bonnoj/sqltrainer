<?php

// Get method - Show login page
$app->get('/login', function() use ($app) 
{
	$app->render('login.php');
	
})->name('login');

// Post method - Submit login
$app->post('/login', function() use ($app) 
{
	// Retrieve 
	$email = $app->request->post()['email'];
	$password = $app->request->post()['password'];
	
	$user = $app->db->table('users')->where('users.user_mail', '=', $email)->first();	// TODO add password check

	if (!$user)
	{
		// Not logged in
		$app->notFound();
	}
	else 
	{
		// Logged in - set user settings in session storage
		$_SESSION['user_mail'] = $user['user_mail'];  // Initializing Session with value of PHP Variable
		$_SESSION['user_id'] = $user['id'];
		$_SESSION['first_name'] = $user['first_name'];
		$_SESSION['last_name'] = $user['last_name'];
		$_SESSION['rechten'] = $user['rechten'];
	}
	
	$app->redirect($app->urlFor('home'));
	
});