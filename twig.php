<?php

require 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

echo $twig->render('hello.twig', array(

	'firstname' => 'Max',
	'lastname' => 'Mustermann'

));

?>