<?php

$app->get('/', function() use ($app) {
		

	if(isset($_SESSION['id5']))
	{
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
	}
	else {
		$app->redirect('login');
	}
	
})->name('home');

$app->get('/loguit', function() use ($app) {
	session_destroy(); // Is Used To Destroy All Sessions
	$app->redirect('login');
})->name('loguit');