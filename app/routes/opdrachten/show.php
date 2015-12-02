<?php
use Models\Models\Opdracht;

// Get method - Show login page
$app->get('/opdrachten/new', function() use ($app) 
{
	$app->render('opdrachten/new.php');
	
})->name('opdrachten.new');

// Get method - Show login page
$app->post('/opdrachten/new', function() use ($app) 
{
    
    $beschrijving = $app->request->post()['beschrijving'];
    $antwoord = $app->request->post()['antwoord'];
    
    $opdracht                   = new Opdracht;
    $opdracht->beschrijving     = $beschrijving;
    $opdracht->antwoord         = $antwoord;

    // save the bear to the database
    $opdracht->save();
    
   $app->response->redirect($app->urlFor('home'), 303);
   //$app->response->redirect('opdrachten/' + $opdracht['id']);

	
})->name('opdrachten.newpost');

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

	$answer = false;
	
	if (isset($_POST['uitvoeren'])) {
		$answer = swek;
	} else {
		$answer = krek;
	}

	//if ($query == $opdracht['antwoord']){
	//	$answer = true;
	//}
	
	
	$app->render('opdrachten/show.php', [
		'opdracht' => $opdracht,
		'test' => $answer
	]);

})->name('opdrachten.showpost');