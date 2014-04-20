<?php
ini_set('display_errors', 1);
require '../vendor/autoload.php';
require '../App/Database/db.php';
$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig(),
    'templates.path' => '../App/Views',
));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__FILE__) . '/cache'
);


// Define models

$app->get('/', function () use ($app) {
	/*
	foreach(\Models\Clients::where('name', '=', 'ivan')->get() as $key){
		echo $key->name;
	}*/
	/*
	 * ORM Example
	$user = new Clients;
	$user->name = 'Name';
	$user->login = 'Login';
	$user->password='pass';
	$user->save();
	* */
	$app->render('index.php', array('id' => 1));
});
$app->run();
