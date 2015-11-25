<?php

use Models\Models\User;

$app->get('/users/:username', function($username) use ($app) {

	$user = User::where('username', $username)->first();

	if ($user == false)
	{
		$app->notFound();
	}

	//$user = $app->db->table('users')->where('username', $username)->first();
	var_dump($user->getFullNameOrUsername());
});