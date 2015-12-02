<?php

use Models\Models\User;

$app->get('/profile', function() use ($app) {
	
	$id = $_SESSION['user_id'];
	$user = User::where('id', $id)->first();

	if ($user == false)
	{
		$app->notFound();
	}

	//$user = $app->db->table('users')->where('username', $username)->first();
	$app->render('profile.php', [ 
		'user' => $user
	]);
	
	
})->name('profile');