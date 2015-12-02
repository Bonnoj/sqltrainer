<?php

$app->get('/', function() use ($app) {
		

	if(isset($_SESSION['user_mail']))
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
			'opdrachten' => $opdrachten,
			'first_name' => $_SESSION['first_name'],
			'last_name' => $_SESSION['last_name']
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