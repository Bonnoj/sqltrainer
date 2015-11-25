<?php

$app->get('/', function() use ($app) {

	$opdrachten = $app->db->table('opdrachten')->get();
	/*$posts = $app->db->table('users')->leftJoin('posts', 'posts.user_id', '=', 'users.id')->get();

	if ($posts == false)
	{
		$app->notFound();
	}
	*/
	$app->render('home.php', [ 
		//'posts' => $posts
		'opdrachten' => $opdrachten
	]);
})->name('home');