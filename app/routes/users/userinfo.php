<?php

use Models\Models\User;

$app->get('/users/:username', function($username) use ($app) {

	$user = User::where('id', $username)->first();

	if ($user == false)
	{
		$app->notFound();
	}

	//$user = $app->db->table('users')->where('username', $username)->first();
	$app->render('users/userinfo.php', [ 
		'user' => $user
	]);
	
	
})->name('userinfo');