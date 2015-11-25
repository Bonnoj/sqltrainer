<?php


$app->get('/opdrachten/:opdrachtId', function($opdrachtId) use ($app){

	$opdracht = $app->db->table('opdrachten')->where('opdrachten.id', '=', $opdrachtId)->first();

	if (!$opdracht)
	{
		$app->notFound();
	}

	$app->render('opdrachten/show.php', [
		'opdracht' => $opdracht
	]);

})->name('opdrachten.show');

$app->post('/opdrachten/:opdrachtId', function($opdrachtId) use ($app){
	
	//$myvar = $app->db->addSelect(new Illuminate\Database\Query\Expression("select * from users"));
	
	$opdracht = $app->db->table('opdrachten')->where('opdrachten.id', '=', $opdrachtId)->first();

	if (!$opdracht)
	{
		$app->notFound();
	}
	
	$query = $app->request->post()['query'];
	
	//$query = $app->db->select('select * from users');
	
	
	$app->render('opdrachten/show.php', [
		'opdracht' => $opdracht,
		'test' => $query
	]);

})->name('opdrachten.showpost');