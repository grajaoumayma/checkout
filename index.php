<?php
require_once 'vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Symfony\Component\HttpFoundation\Request;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$request = Request::createFromGlobals();
$data = json_decode(file_get_contents('data.json'), true);

echo $twig->render('checkout.twig', ['data' => $data]);
?>