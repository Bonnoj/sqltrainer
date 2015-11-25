<?php

$app->get('/posts/:postId', function($postId) use ($app){

	$post = $app->db->table('posts')
		->join('users', 'posts.user_id', '=', 'users.id')
		->where('posts.id', '=', $postId)->first();

	if (!$post)
	{
		$app->notFound();
	}

	$app->render('posts/show.php', [
		'post' => $post
	]);

})->name('posts.show');