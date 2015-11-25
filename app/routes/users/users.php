<?php

use Models\Models\User;

$app->get('/users', function() use ($app) {

	$user = User::all();

	if ($user == false)
	{
		$app->notFound();
	}

	$app->render('users/users.php', [ 
		'users' => $user
	]);
});